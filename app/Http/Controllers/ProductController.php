<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Session;
use DB;

class ProductController extends Controller
{
    public function index()
    {
    	$data= Product::all();
    	return view('products',['data'=>$data]);
    }
    public function details($id)
    {
    	$data = Product::find($id);
    	return view('detail',['details'=>$data]);
    }
    public function search(Request $req)
    {
    	 
    	 $data=Product::where('name','like','%'.$req->input('query').'%'  )->get();
    	 return view('search',['details'=>$data]);
    }
    public function addtocart(Request $req)
    {
    	
    	if($req->session()->has('user'))
    	{
    		$cart=new Cart;
    		$cart->user_id=$req->session()->get('user')['id'];
    		$cart->product_id=$req->product_id;
    		$cart->save();
    		return redirect('/')->with('success','Added to Cart');
    		//return "hhhhhhhhhhhhhh";	
    	}else
    	{
    		return redirect('/login');
    	}
    }

    static function cartItem()
    {
        $user_id=Session::get('user')['id'];
        return Cart::where('user_id',$user_id)->count();
    }

    public function carItem()
    {
        $user_id=Session::get('user')['id'];
       $data= DB::table('cart')
        ->join('products','cart.product_id','products.id')
        ->select('products.*','cart.id as cart_id')
        ->where('cart.user_id',$user_id)
        ->get();
        return view('cartList',['data'=>$data]);
       
    }

    public function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }


    public function orderNow()
    {
        $user_id=Session::get('user')['id'];
      $total= DB::table('cart')
        ->join('products','cart.product_id','products.id')
        ->where('cart.user_id',$user_id)
        ->sum('products.price');
        return view('ordernow',['total'=>$total]);
    }

    public function orderPlace(Request $req)
    {
         $user_id=Session::get('user')['id'];
         $allcart=Cart::where('user_id',$user_id)->get();
         if($req->address == "")
         {
            return "please enter address";
            
         }
         if($req->payment=="")
         {
            return "please select payment method";
         }
         foreach ($allcart as $cart) {
             $order=new Order;
             $order->product_id=$cart['product_id'];
             $order->user_id=$cart['user_id'];
             $order->status="pending";
             $order->payment_method=$req->payment;
              $order->payment_status="pending";
             $order->address=$req->address;
             $order->save();
             Cart::where('user_id',$user_id)->delete();
         }
         $req->input();
         return redirect('/');
        
    }

    public function myOrder()
    {
         $user_id=Session::get('user')['id'];
        $orders= DB::table('orders')
        ->join('products','orders.product_id','products.id')
        ->where('orders.user_id',$user_id)
        ->get();
        return view('myorder',['orders'=>$orders]);
    }


    public function additems(Request $req)
    {
        return view('addnewitem');
    }

    public function addProduct(Request $req)
    {

        
        $Product=new Product;
        $Product->name=$req->name;
        $Product->price=$req->price;
        $Product->category=$req->category;
        $Product->description=$req->description;

          if($req->hasFile('image')){
        $file = $req->file('image');
        $extention =$file->getClientOriginalExtension();
        $filename=time().'.'.$extention;
        $file->move('upload_images/products',$filename);
        $Product->gallery = $filename;
    }else{
        return $req;
        $Product->gallery='';
    }



          $Product->save();

            return redirect('/');



       // return $req->input();

    }


}

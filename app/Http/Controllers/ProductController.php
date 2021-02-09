<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
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


}

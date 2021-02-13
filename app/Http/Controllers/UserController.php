<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use DB;
class UserController extends Controller
{
    public function login(Request $req)
    {
    	$useremail= User::where(['email'=>$req->email])->first();
        if($useremail==''){
            return "Email is empty Or Invalid";
        }
        $userpassword = Hash::check($req->password,$useremail->password);
        if ($userpassword == '') {
            return "Password is wrong or empty";
        }
    	if(!$useremail || !$userpassword)
    	{
    		return "Invalid Email or Password";
    	}else
    	{
    		$req->session()->put('user',$useremail);
    		return redirect('/');
    	}
    }

    public function register(Request $req)
    {
        $user=new User;
        $user->name=$req->name;
        $user->username=$req->username;
        $user->address=$req->address;
        $user->phone=$req->phone;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);

        if($req->hasFile('image')){
        $file = $req->file('image');
        $extention =$file->getClientOriginalExtension();
        $filename=time().'.'.$extention;
        $file->move('user_img/images',$filename);
        $user->gallery = $filename;
    }else{
        return $req;
        $user->gallery='';
    }
        $user->save();
        return redirect('/login');
    }
}

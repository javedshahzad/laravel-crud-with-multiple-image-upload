<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use DB;
use Illuminate\Support\Facades\Validator;
class UserController extends Controller
{
    public function login(Request $req)
    {
        if ($req->email === "admin@gmail.com" && $req->password === "admin") {
            $useremail = User::where(["email" => $req->email])->first();
            if ($useremail == "") {
                session()->put("status", "Email is empty Or User not found!");
                return redirect()->back();
            }
            $userpassword = Hash::check($req->password, $useremail->password);
            if ($userpassword == "") {
                session()->put("status", "Password is wrong or empty");
                return redirect()->back();
            }
            if (!$useremail || !$userpassword) {
                session()->put("status", "Invalid Email or Password");
                return redirect()->back();
            } else {
                session()->put("status", "Login successfull!");
                $req->session()->put("user", $useremail);
                return redirect("/");
            }
        }
    }

    public function register(Request $req)
    {
        $validator =  $req->validate([
            "property_docs" => "max:2048",
            'property_picture' => 'required',
            'property_picture.*' => 'required|image|mimes:jpeg|max:10240',
        ]);
        if (!$validator) {
            session()->put("status", "Error in File size");
            return redirect()->back();
        }
        $user = new User();
        $user->name = $req->name;
        $user->username = $req->username;
        $user->address = $req->address;
        $user->phone = $req->phone;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->property_owner = $req->property_owner;
        $user->property_name = $req->property_name;
        $user->property_type = $req->property_type;
        $user->allotment_type = $req->allotment_type;
        $user->quantity_allotment = $req->quantity_allotment;
        $user->property_location = $req->property_location;
        $allImages = [];
        $CheckUser = User::where(["email" => $req->email])->first();
        if($CheckUser){
            session()->put("status", "Error while registration. Please use different email.This email already taken!");
            return redirect()->back();
        }
        if ($files = $req->file("property_picture")) {
            if (count($files) <= 10) {
                foreach ($files as $imagefile) {
                    $file = $imagefile;
                    $randomNumber = rand(1, 999);
                    $extention = $file->getClientOriginalExtension();
                    $filename = $randomNumber . "-" . time() . "." . $extention;
                    $file->move("property-image/", $filename);
                    $allImages[] = $filename;
                }
                $user->property_picture = json_encode($allImages);
            } else {
                session()->put(
                    "status",
                    "Maximum 10 images allowed to upload!"
                );
                return redirect()->back();
            }
        }
        if ($req->hasFile("property_docs")) {
            $file = $req->file("property_docs");
            $extention = $file->getClientOriginalExtension();
            $filename = time() . "." . $extention;
            $file->move("property-docs/", $filename);
            $user->property_docs = $filename;
        }
            $user->save();
            session()->put("status", "Registration Successfull!");
            return redirect()->back();
    }
    public function dashboard()
    {
        $data = User::all();
        return view("dashboard", ["data" => $data]);
    }
    public function delete($id)
    {
        $data = User::where("id", $id)->delete();
        if ($data) {
            session()->put("status", "User Deleted Successfully!");
            return redirect("/");
        } else {
            session()->put("status", "User not Deleted");
            return redirect("/");
        }
    }
    public function edit($id)
    {
        $data = User::find($id);
        return view("edit", ["data" => $data]);
    }
    public function update(Request $req, $id)
    {
        $data = User::where("id", $id)->Update([
            "name" => $req->name,
            "username" => $req->username,
            "address" => $req->address,
            "phone" => $req->phone,
            "property_owner" => $req->property_owner,
            "property_name" => $req->property_name,
            "property_type" => $req->property_type,
            "allotment_type" => $req->allotment_type,
            "quantity_allotment" => $req->quantity_allotment,
            "property_location" => $req->property_location,
            "status" => $req->status,
        ]);
        if ($data) {
            session()->put("status", "User updated successfully!");
            return redirect("/");
        }
    }
}

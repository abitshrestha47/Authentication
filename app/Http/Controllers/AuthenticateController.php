<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Authenticate;


class AuthenticateController extends Controller
{
    //
    public function logger(Request $req){
        $req->validate([
            'name'=>'required',
            'email'=>'required | unique:authenticates,email',
            'password'=>'required'
        ]);
        $newObj=new Authenticate();
        $newObj->name=$req->name;
        $newObj->email=$req->email;
        $newObj->password=Hash::make($req->password);
        $newObj->save();
        if($newObj){
            return back()->with('success','Sign up successful');
        }
        else{
            return back()->with('fail','Sign up failed');
        }
    }
    public function loggedin(Request $req){
        $req->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        $user=Authenticate::where('email','=',$req->email)->first();
        if($user){
            if(Hash::check($req->password,$user->password)){
                return redirect('/dashboard');
            }
            else{
                return back()->with('failed',"Password doesnot matched");
            }
        }
        else{
            return back()->with('fail','user doesnot exist');
        }
    }
}
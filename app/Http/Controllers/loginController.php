<?php

namespace App\Http\Controllers;

use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{


    public function index(Request $request){
        if($request->method() == 'GET'){
            return view('admin/login');
        }else if($request->method() == 'POST'){
            $validate = $request->validate([
                'username' => 'required',
                'password' => 'required'
            ]);
            if($validate){
                $user_name = trim($request->get('username'));
                $password = trim($request->get('password'));
                $user = \App\Models\User::where('username' , $user_name)->first();
                if($user){
                    if(Hash::check($password , $user->password)){
                        Auth::login($user);
                        return redirect()->route('admin.home');
                    }else{
                        return redirect()->route("login");
                    }
                }else{
                    return redirect()->route('login');
                }
            }
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;//dong nay nho them vao
use App\user;

class LoginController extends Controller
{
    //get
    public function getLogin(){
        if(!Auth::check()){
            return view('admin.login');
        }else{
            return redirect('admin');
        }

    }
    //post
    public function postLogin(LoginRequest $request){
    	$login=[
    		'email' => $request->email,
    		'password' => $request->password,
    	];
    	if (Auth::attempt($login)){

            return redirect('admin');
        }else{
        	return redirect()->back();//neu khong phai quay ve trang truoc
        }
    }

    public function getLogout(){
        Auth::logout();//phuong thuc logout cua laravel
        return redirect()->Route('getLogin');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserAddRequest;
use App\Http\Requests\UserEditRequest;
use Auth;
use App\User;

class UserController extends Controller
{
    public function getUserAdd(){
    	return view('admin.user.add');
    }
    public function postUserAdd(UserAddRequest $request){
    	$user = new User;
    	$user->username = $request->txtusername;
    	$user->email = $request->txtemail;
    	$user->password = bcrypt($request->txtpassword);
    	$user->lever = $request->txtlever;
    	$user->save();
    	return redirect()->route('getAddUser')->with('thongbaoadduser', 'Tạo tài khoản thành công!');
    }

    public function getlistUser(){
    	$data = User::all();
        $data = User::paginate(5);
      	return view('admin.user.list',["listuser"=>$data]);
    }
    public function getDeleteUser($id){
    	$data = User::find($id);
        $user_current_login = Auth::user()->id;
        if($user_current_login==$id || $data['lever']==1){
            return redirect()->route('getlistUser')->with('xoaUserkhongthanh', 'Xóa User không thành công'); 
        }else{
            $data->delete();
            return redirect()->route('getlistUser')->with('xoaUser', 'Xóa User thành công'); 
        }
        	
    }

    public function getEditUser($id){
        $data = User::find($id);
        return view('admin.user.edit',["edituser"=>$data]);
    }
    public function postEditUser(UserEditRequest $request,$id){
        $data = User::find($id);
        $data->username = $request->txtusername;
        $data->email = $request->txtemail;
        $data->fullname = $request->txtpfullname;
        $data->lever = $request->txtlever;
        $data->address = $request->txtadress;
        $data->phone = $request->txtphone;
        $data->save();
        return redirect()->route('getlistUser')->with('thongbaoedituser', 'Chỉnh sửa tài khoản thành công!');
    }
}

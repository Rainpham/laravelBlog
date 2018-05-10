<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ContactModel;

class ContactController extends Controller
{
    public function getAddContact(){
    	return view('admin.contact.add');
    }

    public function postAddContact(Request $request){
    	$this->validate($request,
            [
                'name'=>'required',
                'email'=>'required'
            ],[
                'name.required'  =>'Bạn chưa nhập tên',
                'email.required' => 'Bạn chưa nhận email'
            ]);
        $db = new ContactModel;
        $db->name    = $request->name;
        $db->email   = $request->email;
        $db->message = $request->message;
        $db->status  = $request->status;
        $db->save();
      //bat dau tai day
        return redirect()->route('getlistContact')->with('tbcontact', 'Them contact thanh cong!');
    }

    public function getlistContact(){
        $db = ContactModel::all();
        $db=ContactModel::paginate(5);
    	return view('admin.contact.list',['contact'=>$db]);
    }

    public function getDeleteContact($id){
    	$db=ContactModel::find($id);
        $db->delete();
        return redirect()->route('getlistContact')->with('tbcontactxoa','xoa thàng công');
    }

    public function getEditContact(){
    	echo "getEditContact";
    }

    public function postEditContact(){
    	echo "postEditContact";
    }
}

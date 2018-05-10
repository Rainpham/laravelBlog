<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CommentModel;
use App\User;
use Auth;

class CommentController extends Controller
{
	public function getAddComment(){
		$username = Auth::user()->username;
		return view('admin.comments.add',['username'=>$username]);
	}

	public function postAddComment(Request $request){
		$db = new CommentModel;
		$db->name = Auth::user()->username;
		$db->id_user = Auth::user()->id;
		$db->conten_comment= $request->content;
		$db->status = $request->status;
		$db->save();
		return redirect()->route('getlistComment');

	}

	public function getlistComment(){
		echo "getlistComment";
	}

	public function getDeleteComment(){
		echo "getDeleteComment";
	}

	public function getEditComment(){
		echo "getEditComment";
	}
    
    public function postEditComment(){
    	echo "postEditComment";
    }
}

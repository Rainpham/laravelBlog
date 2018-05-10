<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\NewsAddRequest;
use App\Http\Requests\EditNewsRequest;
use App\Models\News;
use App\Models\CategoryModel;
use Auth,File;

class NewsController extends Controller
{
    public function getAddNews(){
    	$dbcate = CategoryModel::all();
    	return view('admin.news.add',['dbcate'=>$dbcate]);
    }
    public function postAddNews(NewsAddRequest $request){
    	$dbnew = new News;
    	$dbnew->title 		=  $request->title;
    	$dbnew->description =  $request->description;
    	$dbnew->content 	=  $request->content;
    	$dbnew->status 		=  $request->status;
    	$dbnew->category_id =  $request->Category;
    	$dbnew->user_id 	=  Auth::user()->id;
    	$dbnew->slug		=  str_slug($request->title);
    	$dbnew->author		=  Auth::user()->username;

    	$file = $request->file('hinh');
    	if(strlen($file) > 0){
    		$filename = time()."_".$file->getClientOriginalName();
    		$filepath = 'upload/news';
    		$file->move($filepath,$filename);
    		$dbnew->img=$filename;
    	}
    	
    	$dbnew->save();
    	return redirect()->route('getlistNews')->with('tbnews', 'Tạo bài viết thành công!');
    }
    public function getlistNews(){
     	$dbnew 	= News::all();
     	$dbnew	= News::paginate(5);
    	return view('admin.news.list',['dbnew'=>$dbnew]);
    }
    public function getEditNews($id){
    	$dbcate = CategoryModel::all();
    	$datanew = News::find($id);
    	return view('admin.news.edit',['dbcate'=>$dbcate,'dbnews'=>$datanew]);
    }
    public function postEditNews(EditNewsRequest $request,$id){
    	$dbnew = News::find($id);
    	$dbnew->title 		=  $request->title;
    	$dbnew->description =  $request->description;
    	$dbnew->content 	=  $request->content;
    	$dbnew->status 		=  $request->status;
    	$dbnew->category_id =  $request->Category;
    	$dbnew->user_id 	=  Auth::user()->id;
    	$dbnew->slug		=  str_slug($request->title);
    	$dbnew->author		=  Auth::user()->username;

    	$file = $request->file('hinh');
    	if(strlen($file) > 0){
    		$filename = time()."_".$file->getClientOriginalName();
    		$filepath = 'upload/news';
    		$file->move($filepath,$filename);
    		$dbnew->img=$filename;
    	}
    	
    	$dbnew->save();
    	return redirect()->route('getlistNews')->with('tbeditnews', 'chỉnh sữa bài viết thành công!');
    }

    public function getDeleteNews($id){
    	$data = News::findOrFail($id);
    	if(file_exists(public_path().'/upload/news/'.$data->img)){
    		File::delete(public_path().'/upload/news/'.$data->img);
    	}
    	$data->delete();
    	return redirect()->route('getlistNews')->with('xoanews', 'Xóa News thành công'); 
    }
}

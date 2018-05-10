<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AboutModel;

class AboutController extends Controller
{
    public function getAddAbout(){
    	return view('admin.about.add');
    }

    public function postAddAbout(Request $request){
    	$About = new AboutModel;
        $About->name_company = $request->name_company;
        $About->description  = $request->description;
        $About->content      = $request->contentAbout;
        
        $file = $request->file('images');
        if(strlen($file) > 0){
            $filename = time()."_".$file->getClientOriginalName();
            $filepath = 'upload/about';
            $file->move($filepath,$filename);
            $About->images = $filename;
        }
        $About->status       = $request->status;
        $About->save();
        return redirect()->route('getlistAbout');
    }

    public function getlistAbout(){
    	$About = AboutModel::all();
        return view('admin.about.list',['About'=>$About]);
    }

    public function getDeleteAbout($id){
    	$About = AboutModel::find($id);
        $About->delete();
        return redirect()->route('getlistAbout');
    }

    public function getEditAbout($id){
        $About = AboutModel::find($id);
        return view('admin.about.edit',['About'=>$About]);
    }

    public function postEditAbout(Request $request,$id){
    	$About =AboutModel::find($id);
        $About->name_company = $request->name_company;
        $About->description  = $request->description;
        $About->content      = $request->contentAbout;
        
        $file = $request->file('images');
        if(strlen($file) > 0){
            $filename = time()."_".$file->getClientOriginalName();
            $filepath = 'upload/about';
            $file->move($filepath,$filename);
            $About->images = $filename;
        }
        $About->status       = $request->status;
        $About->save();
        return redirect()->route('getlistAbout');
    }
}

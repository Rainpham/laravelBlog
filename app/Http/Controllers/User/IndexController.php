<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use App\Models\SliderModel;
use App\Models\AboutModel;
use App\Models\ProductModel;


class IndexController extends Controller
{
    // public function index(){
    // 	return view('fontend.index');
    // 	//muon dung bien global thi phai chinh viewshave

    // }

    public function trangchu(){
    	$slider = SliderModel::all();
    	$about  =  AboutModel::all();
        $produc = ProductModel::all();
    	return view('fontend.home.trangchu',['slider'=>$slider,'about'=>$about,
            'produc'=>$produc]);
        //echo $about;
    }

}

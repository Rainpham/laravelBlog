<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SliderModel;
use File;

class SliderController extends Controller
{
    public function getAddSlider(){
    	return view('admin.slider.add');
    }

    public function postAddSlider(Request $request){
    	$this->validate($request,
            [
                //ghi lỗi
                //required: loi bo trống
                //unique : lỗi trùng bảng (tenbang,name)
                'ten'=>'required|unique:vp_slider,information',
                'images'=>'required'
            ],
            [
                //thong bao loi
                'ten.required'=>'Bạn không được bỏ trống',
                'ten.unique'=>'ảnh đã tồn tại',
                'images.required'=>'bạn không được bỏ trống'

            ]);
        $db = new SliderModel;
        $db->information = $request->ten;
        $file = $request->file('images');
        if(strlen($file) > 0){
            $filename = time()."_".$file->getClientOriginalName();
            $filepath = 'upload/slider';
            $file->move($filepath,$filename);
            $db->images=$filename;
        }
        $db->url         = $request->url;
        $db->status      = $request->statust;
        $db->save();
        return redirect()->route('getlistSlider')->with('tbslidertc','thêm slider thanh cong');

    }

    public function getlistSlider(){
    	$db = SliderModel::all();
        $db = SliderModel::paginate(5);
        return view('admin.slider.list',['db'=>$db]);
    }

    public function getDeleteSlider($id){
    	$db = SliderModel::findOrFail($id);
        if(file_exists(public_path().'/upload/slider/'.$db->images)){
            File::delete(public_path().'/upload/slider/'.$db->images);
        };
        $db->delete();
        return redirect()->route('getlistSlider')->with('xoaslider', 'Xóa Slider thành công'); 
    }

    public function getEditSlider($id){
    	$db = SliderModel::find($id);
        return view('admin.slider.edit',['db'=>$db]);
    }

    public function postEditSlider(Request $request,$id){
        $db = SliderModel::find($id);
        $db->information = $request->ten;
        $file = $request->file('images');
        if(strlen($file) > 0){
            $filename = time()."_".$file->getClientOriginalName();
            $filepath = 'upload/slider';
            $file->move($filepath,$filename);
            $db->images=$filename;
        }
        $db->url         = $request->url;
        $db->status      = $request->statust;
        $db->save();
        return redirect()->route('getlistSlider')->with('chinhsuaslider','sua  slider thanh cong');

    }

}

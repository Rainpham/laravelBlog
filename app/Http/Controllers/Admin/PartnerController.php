<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PartnerAddRequest;
use App\Models\PartnerModel;
use File;

class PartnerController extends Controller
{
   public function getAddPartner(){
   	return view('admin.partner.add');
   }
   public function postAddPartner(PartnerAddRequest $request){
   	$db = new PartnerModel;
   	$db->name 			= $request->name_company;
   	$db->information 	= $request->infomation;
   	$file = $request->file('logo');
        if(strlen($file) > 0){
            $filename = time()."_".$file->getClientOriginalName();
            $filepath = 'upload/partner';
            $file->move($filepath,$filename);
            $db->logo =$filename;
        };
   	$db->status 		= $request->status;
   	$db->save();
   	return redirect()->route('getlistPartner')->with('TB_Addpartner','Tạo partner thành công');
   }
   public function getlistPartner(){
   	$db = PartnerModel::all();
   	$db	= PartnerModel::paginate(5);
   	return view('admin.partner.list',['db'=>$db]);
   }
   public function getDeletePartner($id){
   		$db = PartnerModel::findOrFail($id);
   		if(file_exists(public_path().'/upload/partner/'.$db->logo)){
    		File::delete(public_path().'/upload/partner/'.$db->logo);
    	}
    	$db->delete();
   		return redirect()->route('getlistPartner')->with('xoapn','xóa thành công');
   }
   public function getEditPartner($id){
   		$db = PartnerModel::find($id);
   		return view('admin.partner.edit',['db'=>$db]);
   	
   }
   public function postEditPartner(Request $request,$id){
   	$db =PartnerModel::find($id);
   	$db->name 			= $request->name_company;
   	$db->information 	= $request->infomation;
   	$file = $request->file('logo');
        if(strlen($file) > 0){
            $filename = time()."_".$file->getClientOriginalName();
            $filepath = 'upload/partner';
            $file->move($filepath,$filename);
            $db->logo =$filename;
        };
   	$db->status 		= $request->status;
   	$db->save();
   	return redirect()->route('getlistPartner')->with('TB_editpartner','Sửa partner thành công');
   }
}

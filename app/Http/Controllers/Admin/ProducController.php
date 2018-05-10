<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductAddRequest;
use App\Models\CategoryModel;
use App\Models\ProductModel;
use App\Models\PartnerModel;
use File;

class ProducController extends Controller
{
    public function getAddProduct(){
        $dbcate = CategoryModel::all();
        $Partner = PartnerModel::all();
    	return view('admin.products.add',['dbcate'=>$dbcate,'Partner'=> $Partner]);
    }

    public function postAddProduct(ProductAddRequest $request){
    	$db = new ProductModel ;
        $db->name               = $request ->name_company;
        $db->description        = $request ->description;
        $db->detail             = $request ->detail;

        $file = $request->file('images');
        if(strlen($file) > 0){
            $filename = time()."_".$file->getClientOriginalName();
            $filepath = 'upload/products';
            $file->move($filepath,$filename);
            $db->images=$filename;
        };
        $db->website_Address    = $request ->website_address;
        $db->categoryproduct_id = $request ->Category_id;
        $db->parther_id         = $request ->Partner;
        $db->status             = $request ->status;

        $db->save();

        return redirect()->route('getAddProduct');
    }

    public function getlistProduct(){
    	$pd = ProductModel::all();
        return view('admin.products.list',['pd'=>$pd]);
    }

    public function getDeleteProduct(){
    	echo "getDeleteProduct";
    }

    public function getEditProduct(){
    	echo "getEditProduct";
    }

    public function postEditProduct(){
    	echo "postEditProduct";
    }
}

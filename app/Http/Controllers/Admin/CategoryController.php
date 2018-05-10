<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CateAddRequest;
use App\Http\Requests\CateEditRequest;
use App\Models\CategoryModel;

class CategoryController extends Controller
{
    public function getAdd(){
      $data=CategoryModel::select('id','name','parent_id')->get()->toArray();
      return view('admin.category.add',["datacate"=>$data]);
    }

    public function postAdd(CateAddRequest $request){
      $cate             = new CategoryModel;
      $cate->name       = $request->txtCategory;
      $cate->parent_id  = $request->txtselec;
      $cate->type       = $request->cateRadio;
      $cate->slug       = str_slug($request->txtCategory,"-");
      $cate->save();
      return redirect()->route('getAdd')->with('thongbao', 'Tạo bài viết thành công!');
      //bat dau tai day
      // ->with(['status', 'Tạo bài viết thành công!'])
    }

    public function getlistCate(){
      //$data=CategoryModel::select('id','name','parent_id')->get()->toArray();
      $data=CategoryModel::all();
      $data=CategoryModel::paginate(5);
      return view('admin.category.list',["datacatelist"=>$data]);
    }

    public function getDelete($id){
      $parent = CategoryModel::where('parent_id',$id)->count();
      if($parent==0){
        $cate=CategoryModel::find($id);
        $cate->delete();
        return redirect()->route('getlistCate')->with('xoa', 'Xóa Category thành công');
      }
      else{
        return redirect()->route('getlistCate')->with('khongxoa', 'Ban không duoc xóa danh muc này');
      }
    }

    public function getEditCate($id){
      $data = CategoryModel::find($id);
      $parent=CategoryModel::all();
      return view('admin.category.edit',['cate'=>$data,'parent'=>$parent]);
    }
    public function postEditCate(CateEditRequest $request){
      $cate             = new CategoryModel;
      $cate->name       = $request->txtCategory;
      $cate->parent_id  = $request->txtselec;
      $cate->type       = $request->cateRadio;
      $cate->slug       = $request->txtSlug;
      $cate->save();
      return redirect()->route('getlistCate')->with('suathanhcong', 'sua thanh cong!');
    }
}

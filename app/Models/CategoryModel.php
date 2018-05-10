<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    protected $table = 'vp_category';
    protected $guarded = [];

    public function news(){
    	 return $this->hasMany('App\Models\News');// quan hệ 1 nhiều
    }

    public function product(){
    	 return $this->hasMany('App\Models\ProductModel');// quan hệ 1 nhiều
    }
}

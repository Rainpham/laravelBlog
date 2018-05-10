<?php

namespace App\MOdels;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    protected $table = 'vp_product';
    protected $guarded = [];

    public function categorymodel(){
    	return $this->belongsTo('App\Models\CategoryModel','category_id','id');// quan hệ phụ thuộc
    }

    public function partner(){
    	return $this->hasMany('App\Models\PartnerModel','parther_id','id');
    }
}

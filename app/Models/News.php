<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'vp_news';
    protected $guarded = [];

    public function categorymodel(){
    	return $this->belongsTo('App\Models\CategoryModel','category_id','id');// quan hệ phụ thuộc
    }
    public function comment(){
    	return $this->hashMany('App\Models\CommentModel');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CommentModel extends Model
{
    protected $table='vp_comment';
    protected $guarded=[];

    public function news(){
    	return $this->belongsTo('App\Models\News','news_id','id'); 
    }

    public function user(){
    	return $this->belongsTo('App\User');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PartnerModel extends Model
{
    protected $table = 'vp_parther';
    protected $guarded = [];


    public function produc(){
    	return $this->belongsTo('App\Models\ProductModel');
    }
}

<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //mac dinh no la bang user nen khi doi ten bang nho khai báo bang moi cho no
    //protected $table="ten bang";
    protected $fillable = [
        'username', 'password','fullname','email','address','phone','created_at','updated_at','lever'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function comment(){
        return $this->hasMany('App\Models\CommentModel');
    }
}

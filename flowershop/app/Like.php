<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
	protected $fillable=[
    	'user_id',
    	'liked',
    	'disliked',    	
    ];

    public function product(){
       return $this->belongsTo('App\Product');
    }
    public function user(){
       return $this->hasMany('App\User', 'user_id');
    }
}
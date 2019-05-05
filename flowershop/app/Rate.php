<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    protected $fillable=[
    	'user_id',
    	'rate_number', 	
    ];
    public function product(){
       return $this->belongsTo('App\Product');
    }
    public function user(){
       return $this->hasMany('App\User');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    protected $fillable=[
    	'path', 	
    ];
    public function product(){
       return $this->belongsToMany('App\Product');
    }
    public function user(){
       return $this->belongsToMany('App\User');
    }
}

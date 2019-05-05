<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable=[
    	'user_id',
    	'feedback_text',
    	'group_id',    	
    ];
    public function product(){
       return $this->belongsTo('App\Product');
    }
    public function user(){
       return $this->hasMany('App\User');
    }
}

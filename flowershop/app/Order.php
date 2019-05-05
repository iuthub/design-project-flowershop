<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=[
		'product_id', 
		'product_amount', 
		'start_delivery_at',
		'received_at',
	];
    public function user(){
    	return $this->belongsTo('App/User');
    }
    public function product(){
    	return $this->hasMany('App/Product', 'product_id');
    }
}

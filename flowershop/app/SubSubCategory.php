<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubSubCategory extends Model
{
    $fillable=[
    	'sub_id',
    	'product_id',
    	'sub_sub_type_name',
    ];
    public function sub_category(){
       return $this->hasMany('App\SubCategory', 'sub_id');
    }
    public function product(){
       return $this->hasMany('App\Product', 'product_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    $fillable=['cat_id', 'sub_type_name',];
    public function sub_sub_category(){
       return $this->belongsTo('App\SubSubCategory', 'sub_id');
    }
    public function category(){
       return $this->hasMany('App\Category', 'cat_id');
    }
    public $timestamps = false;
}

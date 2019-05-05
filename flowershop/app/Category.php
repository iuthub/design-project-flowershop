<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $fillable = ['name'];
	
    public function sub_category(){
       return $this->belongsTo('App\SubCategory', 'cat_id');
    }

    public $timestamps = false;
}

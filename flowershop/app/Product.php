<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=[
    	'company_id',
    	'color_id',
    	'period_id',
    	'price_id',
    	'product_amount_id',
    	'feedback_id',
    	'like_id',
    	'rate_id',
    	'picture_id',
        'sub_sub_category_id',
    	'name',
    	'detailed_info'
    ];
    /*protected $hidden = [
        'password', 'remember_token',
    ];*/
    //Many to one
    public function like(){
       return $this->hasMany('App\Like', 'like_id');
    }
    public function rate(){
       return $this->hasMany('App\Rate', 'rate_id');
    }
    public function feedback(){
       return $this->hasMany('App\Feedback', 'feedback_id');
    }

    //Many to many
    public function subSubCategory(){
       return $this->hasMany('App\SubSubCategory');
    }
    //Many to one
    public function company(){
       return $this->hasMany('App\Companies', 'company_id');
    }
    public function color(){
       return $this->hasMany('App\Color', 'color_id');
    }
    public function price(){
       return $this->hasMany('App\Price', 'price_id');
    }
    public function period(){
       return $this->hasMany('App\Period', 'period_id');
    }
    public function productAmount(){
       return $this->hasMany('App\ProductAmount', 'product_amount_id');
    }
    public function picture(){
       return $this->hasMany('App\Picture', 'picture_id');
    }


}

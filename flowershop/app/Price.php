<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $fillable = [
        'unit_in_USD', 
        'current_price',  
        'currency',  
        'sale',  
        'special_sale',  
        'number_urchase_for_special_sale',  
        'previous_price_unit',  
        'future_price_unit',  
        'future_price_unit_start_time',  
    ];
    public function product(){
       return $this->belongsTo('App\Product');
    } 
}

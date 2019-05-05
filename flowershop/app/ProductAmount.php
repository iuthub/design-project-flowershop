<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductAmount extends Model
{
    protected $fillable = [
        'amount_left', 
        'amount_type',  
        'unit_bunch',  
        'total',  
    ];
    public function product(){
       return $this->belongsTo('App\Product');
    } 
}

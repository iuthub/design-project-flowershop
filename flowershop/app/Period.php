<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    protected $fillable = [
        'name', 
        'type',  
        'start_time',  
        'end_time',  
    ];
    public function product(){
       return $this->hasMany('App\Product', 'period_id');
    } 
}

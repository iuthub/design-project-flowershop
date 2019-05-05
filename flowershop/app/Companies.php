<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    protected $fillable = [
        'name', 
        'location_address',  
        'contact_number',  
        'contact_mail',  
        'terms_of_conditions',  
    ];
    public function product(){
       return $this->belongsTo('App\Product');
    }    
}

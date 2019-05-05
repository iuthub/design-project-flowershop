<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
	protected $fillable=[
		'card_number', 'card_month', 'card_year'
	];
	protected $hidden = [
        'secure_id'
    ];
    public function user(){
    	return $this->belongsTo('App/User');
    }
}

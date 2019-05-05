<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'like_id', 
        'rate_id', 
        'feedback_id', 
        'card_id', 
        'cart_id', 
        'order_id',
        'name', 
        'email', 
        'password',
        'address',           
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'secure_id'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function like(){
       return $this->hasMany('App\Like', 'like_id');
    }
    public function rate(){
       return $this->hasMany('App\Rate', 'rate_id');
    }
    public function feedback(){
       return $this->hasMany('App\Feedback', 'feedback_id');
    }
    public function card(){
       return $this->hasMany('App\Card', 'card_id');
    }
    public function cart(){
       return $this->hasMany('App\Cart', 'cart_id');
    }
    public function order(){
       return $this->hasMany('App\Order', 'order_id');
    }

    public function picture(){
       return $this->hasMany('App\Picture', 'picture_id');
    }


}

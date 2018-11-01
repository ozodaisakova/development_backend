<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductOrder extends Model
{
    protected $fillable=[
        'product_id', 
        'product_count', 
        'product_color', 
        'user_id', 
        'user_name', 
        'user_surname',
        'user_email',
        'user_adress'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function productorder(){
        return $this->belongsTo('App\Product');
    }
}

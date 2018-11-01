<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable=[
        'name', 
        'catalog_id',
        'colors',
        'price',
        'description',
        'width',
        'height',
        'length',
        'material',
        'complect',
        'karkas',
        'images',
        'compound',
        'hidden',
        'available'];
        
        public function productorders(){
            return $this->hasMany('App\ProductOrder');
        }
        

        public function catalog(){
            return $this->belongsTo('App\Catalog');
        }
}

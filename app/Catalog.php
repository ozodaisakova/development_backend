<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    protected $fillable=['name', 'icon', 'hidden'];

    public function products(){
        return  $this->hasMany('App\Product')->select(array('id','name',  'price','available', 'catalog_id', 'images'));
    }
}
 
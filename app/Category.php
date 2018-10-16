<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Product;

class Category extends Model
{
    protected $fillable=['title','icon','slug','parent_id','hidden'];

    public function setSlugAttribute($value){
        $this->attributes['slug']=Str::slug(mb_substr($this->title, 0, 40).\Carbon\Carbon::now()->format('dmyHi'), '-');
    }

    public function children(){
        return  $this->hasMany(self::class, 'parent_id');
    }

    public function category_products(){
        return  $this->hasMany('App\Product')->select(array('id','name', 'slug', 'price','available', 'category_id', 'image'));
    }
}


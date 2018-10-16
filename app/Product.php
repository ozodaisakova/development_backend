<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    protected $fillable=[
        'name', 
        'slug',
        'category_id',
        'price',
        'description',
        'width',
        'height',
        'length',
        'material',
        'complect',
        'karkas',
        'image',
        'compound',
        'hidden',
        'available'];

        public function setSlugAttribute($value){
            $this->attributes['slug']=Str::slug(mb_substr($this->name, 0, 40).\Carbon\Carbon::now()->format('dmyHi'), '-');
        }
}

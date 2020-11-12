<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['name','ProductCategoryID','categoryID','image','price','quantity','description'];

    public function category(){

        return $this->belongsTo('App\Category');

    }

    public function ProductCategory(){

        return $this->belongsTo('App\ProductCategory');

    }

    public function myCart(){

        return $this->hasMany('App\myCart'); // location becareful spelling

    }

}

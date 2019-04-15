<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
  Protected $table="type_products";
  Public function product(){
    return $this->hasMany('App\Product','id_type','id')
  }
}

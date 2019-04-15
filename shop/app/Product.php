<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    Protected $table="Products";
    Public function type_products(){
      return $this->belongTo('App\ProductType','id_type','id');
    }
    Public functinon bill_detail(){
      return $this->hasMany('App\BillDetail','id_product','id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
  Protected $table="bill_detail";
  Public function products(){
    return $this->belongTo('App\Product','id_type','id');
  }
  Public function bill(){
    return $this->belongTo('App\Bill','id_bill','id');
  }
}

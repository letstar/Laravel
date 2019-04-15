<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
  Protected $table="bills";
  Public function bill_detail(){
    return $this->hasMany('App\BillDetail','id_type','id');
  }
}

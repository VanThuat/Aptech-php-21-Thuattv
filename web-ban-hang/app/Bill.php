<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Bill extends Model
{
    protected $table = "bills";
    public function bill_detail(){
        return $this->hasMany('App\BillDetail','id_bill','id');
        //mot bill se co nhieu billdetail nen la hasMany
    }
    public function customer(){
        return $this->belongsTo('App\Customer','id_customer','id');
        //mot bill thuoc ve mot khach hang nen la belongsTo
    }
}
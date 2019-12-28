<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class BillDetail extends Model
{
    protected $table = "bill_detail";
    public function product(){
        return $this->belongsTo('App\product','id_product','id');
        //mot billdetail se thuoc ve san pham nao do
        

    }
public function bill(){
    return $this->belongsTo('App\Bill','id_bill','id');
    //Mot billdetai se thuoc ve mot bill nao do
    }
}
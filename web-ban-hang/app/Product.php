<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    protected $table = "products";

    public function product_type(){
        return $this->belongsTo('App\ProductType','id_type','id');
        //belongsTo la chi quan he 1 nhieu
        //chu y o day la quan he belongsTo nen id la id cua bang products khong phai la id cua type_products
    }
    public function bill_detail(){
        return $this->hasMany('App\BillDetail','id_product','id');
        //hasMany la quan he nhieu, mot san pham se co trong nhieu chi tiet hoa do
        //id day la id cua bang billdetail
    }
}

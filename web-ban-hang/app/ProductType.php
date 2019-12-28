<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class ProductType extends Model
{
    protected $table = "type_products";

    public function product(){
        return $this->hasMany('App/Product','id_type','id');
        //hasMany la quan he nhieu mot
        //hasMany la quan he 1 nhieu (1 type_product co nhieu product)
        //App/Product la duong dan toi model ma table nay dang co quan he
        
        //id_type la khoa ngoai dung de lien ket (o day nam tren bang prducts)
        //id la khoa chinh la id cua type_products
    }
}

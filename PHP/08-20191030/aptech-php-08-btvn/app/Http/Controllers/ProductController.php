<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function  hienThiSanPham()
    {
        //Chon table co ten "usersproducts" trong database de lam lm viec
        $bienUsers = DB::table('products')->get();

        //Truyen du lieu cho view co ten "list-users" voi tùy biến có dang ('key'=>'value')
        return view('product', ['thongTinSanPham' => $bienUsers]);
    }
}

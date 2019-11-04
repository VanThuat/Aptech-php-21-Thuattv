<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Them dong nay vao de tranh bi loi
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function hienThiTatCaNguoiDung()
    {
        //Chon table co ten "users" trong database de lam lm viec
        $bienUsers = DB::table('users')->get();

        //Truyen du lieu cho view co ten "list-users" voi tùy biến có dang ('key'=>'value')
        return view('list-users', ['DsUser' => $bienUsers]);
    }

    public function hienThiMotNguoiDung($id)
    {
        //Chon table co ten "users" trong database de lam lm viec
        $user = DB::table('users')->where('id', '=', $id)->get();
        return $user;
    }
}
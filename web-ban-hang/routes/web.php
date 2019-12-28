<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});




//ADMIN
Route::get('admin','ProductController@index');
Route::resource('products','ProductController');
Route::resource('categories','CategoryController');
//Quan ly gio hang
Route::resource('bill', 'AdminBillController');

Route::get('index','PageController@getIndex')->name('trang-chu');

Route::get('loai-san-pham/{type?}','PageController@getLoaiSp')->name('loai-san-pham');

Route::get('chi-tiet-san-pham/{id}','PageController@getChitiet')->name('chi-tiet-san-pham');

Route::get('lien-he','PageController@getLienhe')->name('lien-he');

Route::get('gioi-thieu','PageController@getGioithieu')->name('gioi-thieu');

Route::get('dang-nhap','PageController@getLogin')->name('dang-nhap');

Route::post('dang-nhap','PageController@postLogin')->name('dang-nhap');

Route::get('dang-ki','PageController@getSignup')->name('dang-ki');

Route::post('dang-ki','PageController@postSignup')->name('dang-ki');

Route::get('dang-xuat','PageController@getLogout')->name('dang-xuat');

Route::get('tim-kiem','PageController@getSearch')->name('tim-kiem');

//Phan gio hang
Route::resource('cart', 'CartController');
//Quan ly gio hang
//them vao gio
Route::get('addcart/{id}','CartController@addcart')->name('them-vao-gio');
//xem gio hang
Route::get('showcart','CartController@showCart')->name('xem-gio');
//update so luong san pham
Route::post('updatecart','CartController@updatecart')->name('cap-nhat-goo');
//xoa 1 san pham
Route::get('removecart/{rowId}','CartController@removecart')->name('xoa-khoi-gio');
//xoa toan bo san pham
Route::get('formatcart','CartController@formatcart')->name('xoa-gio-hang');
//Thanh toan gio hang
Route::get('cartpay','CartController@formPay')->name('dat-hang');
//Luu gio hang vao DB
Route::post('savecart','CartController@store')->name('luu-don-hang');




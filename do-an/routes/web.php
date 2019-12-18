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



Route::get('/', 'ProductController@home');
Route::get('admin','ProductController@index');



Route::resource('products','ProductController');
Route::resource('categories','CategoryController');



//Phan gio hang
Route::resource('cart', 'CartController');
//Quan ly gio hang
//them vao gio
Route::get('addcart/{id}','CartController@addcart');
//xem gio hang
Route::get('showcart','CartController@showcart')->name('showcart');
//update so luong san pham
Route::get('updatecart','CartController@updatecart');
//xoa 1 san pham
Route::get('removecart/{rowId}','CartController@removecart');
//xoa toan bo san pham
Route::get('formatcart','CartController@formatcart')->name('get.formatcart');
//Thanh toan gio hang
Route::get('cartpay','CartController@formPay')->name('get.cartpay');
//Luu gio hang vao DB
Route::post('savecart','CartController@store')->name('get.savecart');

//Quan ly gio hang
Route::resource('bill', 'AdminBillController');



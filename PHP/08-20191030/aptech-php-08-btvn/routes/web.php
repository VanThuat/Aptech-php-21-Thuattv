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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/lam-nhap/{so}', function ($so) {
//     return 'Day la so: ' .$so;
// });

//Co bien
// Route::get('lam-nhap/{id}', function ($id) {
//     return view('hello-user', ['id' => $id]);
// });

// Tao lien ket tu CONTROLLER trong file http/controller
route::get('lam-nhap/{id}', 'userController@hoTen');
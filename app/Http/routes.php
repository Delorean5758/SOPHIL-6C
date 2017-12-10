<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// halaman awal
Route::get('/','LoginController@halamanawal');

// login
Route::get('/halamanlogin','LoginController@login');
Route::post('/ceklogin','LoginController@ceklogin');
Route::get('/register','LoginController@register');
Route::post('/tambah','LoginController@tambah');

//admin
Route::get('/dashboard','AdminController@dashboard');
Route::get('/alternatif','AdminController@alternatif');
Route::get('/kriteria','AdminController@kriteria');
Route::post('/perhitungan','AdminController@perhitungan');
Route::get('/ranking', 'AdminController@viewranking');
Route::get('/detail/{id}','AdminController@detail');
Route::get('/hasil','AdminController@hasil');
Route::post('/optimasi','AdminController@optimasi');
Route::get('/pesan','AdminController@pesan');
Route::get('/detailpesan/{id}','AdminController@detailpesan');
Route::post('/proses_pemesanan','AdminController@proses');
Route::get('/payment','AdminController@payment');
Route::post('/proses_payment','AdminController@proses_payment');

//user
Route::get('/dashboard_user','UserController@dashboard');
Route::get('/hasil_user','UserController@hasil');
Route::get('/pesan_user','UserController@pesan');
Route::post('/detail_hasil','UserController@detail_hasil');
Route::post('/kirim','UserController@kirim');
Route::get('/bayar','UserController@bayar');
Route::post('/transaksi','UserController@transaksi');
Route::get('/cetak/{id}','UserController@cetak');
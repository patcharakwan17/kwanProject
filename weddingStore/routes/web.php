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
//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/product','ProductController@index')->name('product');
//Route::get('/product.index','ProductController@index')->name('product');
Route::get('/promotion','PromotionController@index')->name('promotion');
//Route::get('/product/adcart/{packId}','ProductController@adcart');
//Route::resource('/product/adcart/','OrdersController')->name('adcart','product');
//Route::resource('/product/index/','OrdersController')->name('adcart','product');

Route::get('/', function () {
    return view('welcome');
});

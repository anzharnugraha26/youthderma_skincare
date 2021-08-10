<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('auth/google', 'GoogleController@redirectToGoogle');
Route::get('auth/google/callback', 'GoogleController@handleGoogleCallback');


Route::get('/', 'ShopController@index');
Route::get('products', 'ShopController@product');
Route::get('/product-detail/{id}', 'ShopController@productDetail');

Route::get('contact-us', 'ShopController@kontakUs');

Route::get('/carts' , 'Shop\CartController@create');
Route::get('/cart/remove/{id}', 'Shop\CartController@destroy'); 
Route::post('add-carts/{id}', 'Shop\CartController@store');
Route::post('/carts/update', 'Shop\CartController@update');

Route::get('add-address', 'Shop\AlamatController@index');
Route::get('edit-address/{id}', 'Shop\AlamatController@edit');
Route::get('getcity/{id}', 'Shop\AlamatController@getCities');
Route::get('/getcity/{id}','Shop\AlamatController@getCities')->name('alamat.getCity');
Route::post('savealamat', 'Shop\AlamatController@saveAlamat');
Route::post('updatealamat/{id}', 'Shop\AlamatController@update');

Route::get('check-out', 'Shop\CheckOutController@index');

Route::post('order-simpan', 'Shop\OrderController@store');
Route::get('order/konfirmasi/{id}', 'Shop\OrderController@bayar');
Route::get('order/batal/{id}', 'Shop\OrderController@batal');
Route::get('order', 'Shop\OrderController@index');

Route::post('/bukti-bayar/{id}', 'Shop\OrderController@kirimBukti');
Route::get('/order-detail/{id}', 'Shop\OrderController@show');
Route::post('kurir', 'Shop\CheckOutController@store');
Route::get('gallery', 'ShopController@gallery');

Route::post('sendkontak' , 'ContactController@store');
Route::get('confirm-payment', 'ShopController@payment');
Route::post('confirm-payment', 'ShopController@savepayment');
Route::get('getorder/{id}', 'ShopController@getOrder')->name('order.getOrder');

Route::get('test', 'HomeController@test');
Route::get('test-payment', 'PaymentgetwayController@test');


Route::group(['middleware' => ['auth', 'checkRole:admin'],  'prefix' => 'admin'], function () {
    Route::get('/', 'Admin\AdminController@index');
    Route::get('/customers', 'Admin\AdminController@user');
    Route::resource('product', 'Admin\ProductController');
    Route::post('product/store', 'Admin\ProductController@store');
    Route::get('product/destroy/{id}', 'Admin\ProductController@destroy');
    Route::get('product/edit/{id}', 'Admin\ProductController@edit');
    Route::post('product/update/{id}', 'Admin\ProductController@update');

    Route::get('transaksi', 'Admin\TransaksiController@index');
    Route::get('transaksi-perlu-dicek', 'Admin\TransaksiController@perludicek');
    Route::get('transaksi-perlu-dikirim', 'Admin\TransaksiController@perludikirim');
    Route::get('transaksi-dikirim', 'Admin\TransaksiController@dikirim');
    Route::get('transaksi-dibatalkan', 'Admin\TransaksiController@batal');
    Route::get('transaksi-selesai', 'Admin\TransaksiController@selesai');
    Route::get('transaksi-detail/{id}', 'Admin\TransaksiController@detail');
    Route::get('transaksi/konfirmasi/{id}','Admin\TransaksiController@konfirmasi');
    Route::get('transaksi-destroy/{id}','Admin\TransaksiController@destroy');
    Route::post('/input-resi/{id}','Admin\TransaksiController@inputresi');

});



Route::get('/logout', 'HomeController@logout');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

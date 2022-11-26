<?php

use Illuminate\Support\Facades\Route;

Route::get('/clear-cache', function() {
    \Artisan::call('cache:clear');
    return 'Application cache cleared';
});

Route::get('/productdetail','App\Http\Controllers\MainController@productdetail')->name('productdetail');
Route::get('/shoppingcart','App\Http\Controllers\MainController@shoppingcart')->name('shoppingcart');
Route::get('/faqs','App\Http\Controllers\MainController@faqs')->name('faqs');
Route::get('/products','App\Http\Controllers\MainController@products')->name('products');
Route::get('/contact','App\Http\Controllers\MainController@contact')->name('contact');
Route::get('/checkout','App\Http\Controllers\MainController@checkout')->name('checkout');
Route::get('/about','App\Http\Controllers\MainController@about')->name('about');
Route::get('/','App\Http\Controllers\MainController@index')->name('index');
Route::get('/{message}','App\Http\Controllers\MainController@way')->name('way');





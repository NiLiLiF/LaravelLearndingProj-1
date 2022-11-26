<?php

use Illuminate\Support\Facades\Route;


Route::get('/about','App\Http\Controllers\MainController@about')->name('about');
Route::get('/','App\Http\Controllers\MainController@index')->name('index');
Route::get('/{message}','App\Http\Controllers\MainController@way')->name('way');




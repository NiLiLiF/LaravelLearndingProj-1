<?php

/*use Illuminate\Support\Facades\Route;*/

Route::get('/', function () {
    return view('index');
});

Route::get('/','App\Http\Controllers\MainController@index');

Route::get('/about','App\Http\Controllers\MainController@about');


<?php

/*use Illuminate\Support\Facades\Route;*/

Route::get('/', function () {
    return view('index');
});

Route::get('/about','App\Http\Controllers\MainController@about');

Route::get('/{message}','App\Http\Controllers\MainController@index');




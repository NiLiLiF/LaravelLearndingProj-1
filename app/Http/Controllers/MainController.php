<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function way($message){
        return view('main/main',['content'=>$message]);
    }

    public function index(){
        return view('index');
    }

    public function about(){
        return view('about');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index($message){
        return '<div> My TEXT: '.$message.' </div>';
    }

    public function about(){
        return '<div> about </div>';
    }
}

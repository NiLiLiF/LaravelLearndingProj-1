<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return '<div> My TEXT </div>';
    }

    public function about(){
        return '<div> about </div>';
    }
}

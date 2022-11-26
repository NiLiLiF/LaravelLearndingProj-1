<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function way($message){
        return view('main/main',['content'=>$message]);
    }

    public function index(){
        $products = Product::all();
        return view('index', ['products'=>$products]);
    }

    public function about(){
        return view('about');
    }

    public function checkout(){
        return view('checkout');
    }

    public function contact(){
        return view('contact');
    }

    public function products(){
        return view('products');
    }

    public function faqs(){
        return view('faqs');
    }

    public function shoppingcart(){
        return view('shoppingcart');
    }

    public function productdetail(Request $request)
    {
        $input = $request->all();
        $model = Product::where('id', $input['id'])->first();
        $products = Product::all()->take(3);
        return view('productdetail',['model'=>$model,'products'=>$products]);
    }
}

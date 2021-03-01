<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index (Request $request){
        // $idProduct = $request -> input('id_product');
        // $nameProduct = $request -> input('name_product');
        // $priceProduct = $request -> input('price_product');
        // return view('child',['name' => $comment]);
        return 'Ih kamu get method';
    }

    public function post (Request $request){
        // $idProduct = $request -> input('id_product');
        // $nameProduct = $request -> input('name_product');
        // $priceProduct = $request -> input('price_product');
        // $product -> save();
        return 'Ah yang ini post method';
    }

    public function put (Request $request){
        // $idProduct = $request -> input('id_product');
        // $nameProduct = $request -> input('name_product');
        // $priceProduct = $request -> input('price_product');
        // $product -> save();
        return 'Eh dong ini put method';
    }

    public function delete (Request $request){
        return 'Dah lah ini delete method';
    }
}

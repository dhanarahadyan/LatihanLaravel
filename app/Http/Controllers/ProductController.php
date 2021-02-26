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
        return 'this is get method';
    }

    public function add (Request $request){
        // $idProduct = $request -> input('id_product');
        // $nameProduct = $request -> input('name_product');
        // $priceProduct = $request -> input('price_product');
        // $product -> save();
        return 'this is post method';
    }

    public function put (Request $request){
        // $idProduct = $request -> input('id_product');
        // $nameProduct = $request -> input('name_product');
        // $priceProduct = $request -> input('price_product');
        // $product -> save();
        return 'this is put method';
    }

    public function delete ($id){
        return 'this is delete method';
    }
}

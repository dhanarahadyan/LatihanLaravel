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

        return 'Get Method untuk masuk ke index';
    }

    public function post (Request $request){
        // $idProduct = $request -> input('id_product');
        // $nameProduct = $request -> input('name_product');
        // $priceProduct = $request -> input('price_product');
        // $product -> save();


        $validatedData = $request -> validate([
            'name' => 'required | max:1',
            'address' => 'required',
        ]);
        dd($validatedData);

        //Example for client side on React Native for response
        if($request -> input["Address"]){
            return response("Granted", 201);
        } else {
            return response("Failed", 500);
        }
        return 'Ah yang ini post method';
    }

    public function put (Request $request){
        // $idProduct = $request -> input('id_product');
        // $nameProduct = $request -> input('name_product');
        // $priceProduct = $request -> input('price_product');
        // $product -> save();
        return 'Eh dong ini put method';
    }

    public function delete ($id, $tester){
        return $id.' Dah lah ini delete method '.$tester;
    }
}

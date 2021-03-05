<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;

class ProductController extends Controller
{
    public function index (Request $request){

    //DB Query Builder
    // $product = DB::table('products')->select('name','title')->get();

    //Eloquent
    $product = Product::select('name','title','id')->get();

        return response()->json(
            [
                'status'=>'success',
                'data'=>$product
            ],
            200
        );
    }

    public function post (Request $request){        
        
        //DB Query Builder    
        // $inserted = DB::table('product')
        // ->insert(
        //     [
        //     'name' => $request->input('name'),
        //     'title' => $request->input('title')
        //     ]);
                
        //Eloquent
        $product = new Product;
        $product->name = $request->input('name');
        $product->title = $request->input('title');
        
        if($product->save()){
            $message = 'Insert Success';
        } else {
            $message = 'Insert Failed';
        }

        // if($inserted){
        // $message = 'Insert Success!';

  return response()->json(
      [
          'status'=>'Success',
          'message'=>$message
      ]
      );
    }

    public function put (Request $request, $id){
        //DB Query Builder
        // $updated = DB::table('product')
        // ->where('id', $id)
        // ->update(
        //     [
        //       'name' => $request->input('name'),
        //       'title' => $request->input('title')
        //     ]);
        
        //Eloquent
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->title = $request->input('title');
        $product->id = $request->input('id');

        if($product->save()){
            $message = 'Update Success!';
        } else {
            $message = 'Update Failed!';
        }

        return response()->json(
            [
                'status'=>'Success',
                'message'=>$message
            ]
            );
    }

    public function delete ($id){
        //DB Query Builder
        // $deleted = DB::table('product')
        // ->where('id', $id)
        // ->delete();
        
        //Eloquent
        $product = Product::find($id);

        if($product->delete()){
            $message = 'Delete Success!';
        } else {
            $message = 'Delete Failed!';
        }

        return response()->json(
            [
                'status'=>'Success',
                'message'=>$message
            ]
        );
    }
}

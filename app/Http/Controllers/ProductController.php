<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\TheProduct;

class ProductController extends Controller
{
    public function index (Request $request){

    //DB Query Builder
    // $product = DB::table('products')->select('name','title')->get();

    //Eloquent
    $product = TheProduct::select('id','Name','Stock','Category','Photo','Description','Condition','Price')->get();

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
        $product = new TheProduct;
        $product->Name = $request->input('Name');
        $product->Stock = $request->input('Stock');
        $product->Category = $request->input('Category');
        $product->Photo = $request->input('Photo');
        $product->Description = $request->input('Description');
        $product->Condition = $request->input('Condition');
        $product->Price = $request->input('Price');

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
        $product = TheProduct::find($id);
        $product->Name = $request->input('Name');
        $product->Stock = $request->input('Stock');
        $product->Category = $request->input('Category');
        $product->Photo = $request->input('Photo');
        $product->Description = $request->input('Description');
        $product->Condition = $request->input('Condition');
        $product->Price = $request->input('Price');

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
        $product = TheProduct::find($id);

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

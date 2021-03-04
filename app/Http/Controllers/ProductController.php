<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    public function index (Request $request){
        $product = DB::table('product')->get();

        return response()->json(
            [
                'status'=>'success',
                'data'=>$product
            ],
            200
        );
    }

    public function post (Request $request){
        $inserted = DB::table('product')
        ->insert(
            [
            'name' => $request->input('name'),
            'title' => $request->input('title')
            ]);
  
        if($inserted){
        $message = 'Insert Success!';
  }

  return response()->json(
      [
          'status'=>'Success',
          'message'=>$message
      ]
      );
    }

    public function put (Request $request, $id){
        $updated = DB::table('product')
        ->where('id', $id)
        ->update(
       [
                  'name' => $request->input('name'),
                  'title' => $request->input('title')
                  ]);
        
        if($updated){
            $message = 'Update Success!';
        }

        return response()->json(
            [
                'status'=>'Success',
                'message'=>$message
            ]
            );
    }

    public function delete ($id){
        $deleted = DB::table('product')
        ->where('id', $id)
        ->delete();

        if($deleted){
            $message = 'Delete Success!';
        }

        return response()->json(
            [
                'status'=>'Success',
                'message'=>$message
            ]
        );
    }
}

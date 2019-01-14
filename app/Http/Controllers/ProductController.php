<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB;

class ProductController extends Controller{
    public function index(){
      return Product::all();
    }
    public function show(Product $product){
      return $product;
    }

    public function rolex(){
       return Product::all();

    }

    public function store(Request $request)
   {     $this->validate($request, [
        'title' => 'required|unique:products|max:255',
        'description' => 'required',
        'price' => 'integer',
        'availability' => 'boolean',
    ]);
       $product = Product::create($request->all());

       return response()->json($product, 201);
   }

   // public function update(Request $request, Product $product)
   // {
   //     $product->update($request->all());
   //
   //     return response()->json($product, 200);
   // }

    public function update(Request $request){
      $this->validate($request,[
        'title' => 'required|string|max:255',
        'new_price' =>'required|integer',
        'availability' => 'required',
      ]);
       return $updated_product=DB::table('products')->where('title',$request->input('title'))->update(['price'=>$request->input('new_price'),'availability'=>$request->input('availability')]);
    }

   public function deleteID(Request $request){
      $request->validate([
        'id' => 'string|max:2',
      ]);
       return DB::table('products')->where('id',$request->input('id'))->delete();
      //    return DB::table('products')->where('title',$request->input('title'))->delete();
      //    return DB::table('products')->where('availability',$request->input('availability'))->delete();
       }

     public function deleteTitle(Request $request){
          $request->validate([
            'title' => 'string|max:255',
          ]);
             return DB::table('products')->where('title',$request->input('title'))->delete();
          //    return DB::table('products')->where('availability',$request->input('availability'))->delete();
           }

      public function deleteAvailability(Request $request){
              $request->validate([
                'title' => 'string|max:255',
              ]);
                 return DB::table('products')->where('availability',$request->input('availability'))->delete();
               }
   }

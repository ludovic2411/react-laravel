<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB;

class brandController extends Controller
{
    public function rolex(){
       echo DB::table('products')->where('title','Rolex')->get();
    }
    public function omega(){
      echo DB::table('products')->where('title','Omega')->get();
    }
    public function rm(){
      return DB::table('products')->where('title','Richard Mille')->get();
    }
}

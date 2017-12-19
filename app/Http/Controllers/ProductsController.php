<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    public function getProducts()
    {

        $products = Product::all();
       
       // $response = [
       //     ['id'=>1,
        //    'productdescription'=>'cesna120'],
        //    ['id'=>2,
         //   'productdescription'=>'cesna420'],
         //   ['id'=>3,
         //   'productdescription'=>'cesna320']
   
      //  ];
         return response()->json($products,200);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detail;
use App\Product;

class RecordsController extends Controller
{
    //add new row to the details table
    public function newRecord(Request $request)
    {
       $productId = $request->input('productId');
        $date = $request->input('date');
        $longitude = $request->input('longitude');
        $latitude = $request->input('latitude');
        $elevation = $request->input('elevation');

        $detail = new Detail;
        $detail->productid = $productId;
        $detail->datetime = $date;
        $detail->longitude = $longitude;
        $detail->latitude = $latitude;
        $detail->elevation = $elevation;

        if($detail->save()){
            return "Success";
        }else{
            return "False";
        }
    }
// add new product to the products table
    public function addNewProduct(Request $request)
    {
       $productName = $request->input('productName');
        $newProduct = new Product;
        $newProduct->productdescription = $productName;
        if($newProduct->save()){
            return  $newProduct->id;
        }else{
            return "False";
        }
    }
}

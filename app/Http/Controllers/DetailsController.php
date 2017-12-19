<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detail;
use App\Product;

class DetailsController extends Controller
{
    //get all the data from the details table
    public function getDetails($id)
    {

        //Fetch data according to the plan
        $details = Detail::where('productid', $id)->get();
    
         return response()->json($details,200);
        //return $plan;
    }
// Delet specific row
    public function deleteDetail($id, $productId, $name)
    {
        $detail = Detail::where('id', $id)->first();
        if($detail->delete()){
            $details = Detail::where('productid', $productId)->get();
            if($details->count()){
                return response()->json($detail,200);
            }else{
                $product = Product::where('id', $productId)->first();
                if($product->delete()){
                    return response()->json($detail,200);;
                }else{
                    return "Something went wrong";
                }
            }
           
        }else{
            return "Something went wrong";
        }
        
    }
// update specific row
    public function updateDetail(Request $request)
    {
      if($detail = Detail::where('id','=', $request->input('detailId'))->update(array(
        'productid' => $request->input('productId'),
        'datetime' => $request->input('date'),
        'longitude' => $request->input('longitude'),
        'latitude' => $request->input('latitude'),
        'elevation' => $request->input('elevation')
     
     ))) {
         return "success";
     }else {
         return "False";
     }
       
    }
}

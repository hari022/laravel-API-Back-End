<?php

namespace App\Http\Controllers;
use Exception;
use Illuminate\Http\Request;
use App\Detail;
class ReportController extends Controller
{ 
    // Get all the details of the specific product
    public function getListings(Request $request)
    {
        

        $id = $request->input('id');
        //Fetch data according to the plan
        //foreach($id as $x){
           // $data=[];
            $details = Detail::whereIn('productid', $id)->get();
            //array_push($data, $details);
        //}
       
    
         return response()->json($details,200);
        //return $plan;
    }
// Gett all data from the details table
    public function getAllDetails()
    {

        //Fetch data according to the plan
        $details = Detail::all();
    
         return response()->json($details,200);
        //return $plan;
    }

   

    
}

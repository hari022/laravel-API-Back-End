<?php

namespace App\Http\Controllers;
use Exception;
use Illuminate\Http\Request;
use App\Detail;
class ReportController extends Controller
{ 
    // Get all the details of the specific product
    public function getListings($id)
    {

        //Fetch data according to the plan
        $details = Detail::where('productid', $id)->get();
    
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

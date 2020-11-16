<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class changeRadius extends Controller
{
    /public function changeRadius(Request $request,$promoCode){
      $response=promoCode::where('promoCode',$promoCode)->first();
      $Radius=request("Radius");


      $response->Radius = $Radius;


       $response->save();


      return $response;



    }
}

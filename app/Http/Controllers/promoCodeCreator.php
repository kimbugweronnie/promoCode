<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\promoCode;
use App\Http\Controllers\codeGenerator;
use App\Http\Controllers\locationGeocode;



class promoCodeCreator extends Controller
{
    public function generatePromoCode(Request $request)
    {

      try {

        $Amount=request("Amount");
        $Radius=request("Radius");
        $location=request("location");
        $Event=request("Event");
        $number=request("number");


        for($x=0;$x<=$number;$x++){
          $codeGenerate=new codeGenerator();
          $theCode=$codeGenerate->getCode();
          $newlocationGecode=new locationGeocode();
          $thenewlocationGeocode=$newlocationGecode->locationResponse();

          $newpromoCodeCreatorPayload=[
          'promoCode'=>$theCode,
          'Amount' =>$Amount,
          'Radius' => $Radius,
          'location' => $Radius,
          'Event' => $Event,
          'latitude'=>$thenewlocationGeocode['lat'],
          'longtitude'=>$thenewlocationGeocode['lon'],
          'Deactivated'=>False,
          'Status'=>'Active',
          'Expired'=>False,
          ];

         promoCode::create($newpromoCodeCreatorPayload);

        }


        $newTimer= new Timer();
        $NewpromoCodes = $newTimer->ExpiryTime();
        return $NewpromoCodes;

      }
    //  echo "$number codes are created";
 catch (\Exception $e) {

      }

    }
}

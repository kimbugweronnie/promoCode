<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\geoCode;
use App\Http\Controllers\promoCodeCreator;



class locationGeocode extends Controller
{
    public function locationResponse(Request $request){
      // $newpromoCodeCreator = new promoCodeCreator();
      // return $newpromoCodeCreator->$location;
      $venue=request("venue");

      //$venue='Kololo Acacia Avenue Kampala Central Kampala Kampala Uganda';
      $NewGeoCode= new geoCode();
      $locationGeocodePayload= $NewGeoCode->findlocation($venue);
      return $locationGeocodePayload;
    }


}

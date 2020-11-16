<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\mileCalculation;
use App\Models\promoCode;

class validityDestination extends Controller
{
    //
    public function locationResponse(Request $request){
      // $code='DDAADA5';
      // $pickup='Kololo Acacia Avenue Kampala Central Kampala Kampala Uganda';
      // $destination='Nakasero Hospital, Akii Bua Road, Kitante, Nakasero, Central, Kampala, 21706, Uganda';
      $code=request("code");
      $pickup=request("pickup");
     $destination=request("destination");


      $NewGeoCode= new geoCode();
      $UserGeoCode=$NewGeoCode->findlocation($destination);
      $user_lat=floatval($UserGeoCode['lat']);
      $user_lon=floatval($UserGeoCode['lon']);

      $response=promoCode::where('promoCode',$code)->first();
      $newmileCalcuation= new mileCalculation();

      $distance=$newmileCalcuation->mileCalculation($response['latitude'], $user_lon,
      $user_lat, $response['longtitude'],'M');
      if ($distance <= $response['Radius']) {
      echo "promo Code Valid";
    }else{
      echo "promo Code inValid";
    }
     // return $distancePayload;
    }
}

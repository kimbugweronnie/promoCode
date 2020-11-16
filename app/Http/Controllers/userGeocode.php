<?php

namespace App\Http\Controllers;
use App\Models\promoCode;

use Illuminate\Http\Request;

class userGeocode extends Controller
{
  public function locationResponse(){
    $code='DDAADA5';
    $pickup='Kololo Acacia Avenue Kampala Central Kampala Kampala Uganda';
    $destination='Nakasero Hospital, Akii Bua Road, Kitante, Nakasero, Central, Kampala, 21706, Uganda';




    $NewGeoCode= new geoCode();
    $UserGeoCode=$NewGeoCode->findlocation($pickup);


    $response=promoCode::where('promoCode',$code)->first();
   $user_lat=floatval($UserGeoCode['lat']);
   $user_lon=floatval($UserGeoCode['lon']);

  $distancePayload=[
    'user_lat'=>$user_lat,
    'user_long'=>$user_lon,
    'venue_lat'=>$response['latitude'],
    'venue_long'=>$response['longtitude'],
  ];


   return $distancePayload;
  }
}

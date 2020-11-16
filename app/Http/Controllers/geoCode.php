<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class geoCode extends Controller{




    public function findlocation($location)
    {
      //$location='Kololo Airstrip Uganda';
      //$location='Kololo Acacia Avenue Kampala Central Kampala Kampala Uganda';
      $address = str_replace(" ", "%20", $location);
      $url = "https://us1.locationiq.com/v1/search.php?key=
      pk.7afbfee4f83beb994c1619f0728a256e&q=.$address&format=json";
      $resp = file_get_contents($url);
      $resp=json_decode($resp);

      $geoCodePayload=[
        'location'=>$location,
        'lat'=>$resp[0]->lat,
        'lon'=>$resp[0]->lon,


      ];
      return $geoCodePayload;




    }
}

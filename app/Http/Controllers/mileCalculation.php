<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mileCalculation extends Controller
{
  public function mileCalculation($lat1, $lon1, $lat2, $lon2,$unit)
  {

  $theta = $lon1 - $lon2;
  $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
  $dist = acos($dist);
  $dist = rad2deg($dist);
  $miles = $dist * 60 * 1.1515;
  $unit = strtoupper($unit);

  return $miles;


}
  }

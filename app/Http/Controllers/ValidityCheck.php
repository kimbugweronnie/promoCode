<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\userGeocode;
use App\Http\Controllers\mileCalculation;

class ValidityCheck extends Controller
{
  public function ValidityCheck()
  {
    $newuserGeocode= new userGeocode();
    $coordinates=$newuserGeocode->locationResponse();
    $newmileCalcuation= new mileCalculation();

    $distance=$newmileCalcuation->mileCalculation($coordinates['venue_lat'], $coordinates['user_long'],
    $coordinates['user_lat'], $coordinates['venue_long'],'M');
    if ($distance <= 1) {
    echo "promo Code Valid";
}







  }
}

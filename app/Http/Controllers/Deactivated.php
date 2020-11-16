<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\promoCode;

class Deactivated extends Controller
{
    //
    public function changeToDeactivated($promoCode){
      $response=promoCode::where('promoCode',$promoCode)->first();


      $response->Deactivated = True;
      $response->Status = 'Inactive';

       $response->save();


      return $response;



    }
}

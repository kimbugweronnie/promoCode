<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\promoCode;

class ActivePromoCodes extends Controller
{
  public function CheckActive(){
    $ActiveCodes = promoCode::where('Status', 'Active')->get();
    return  $ActiveCodes;
  }
}

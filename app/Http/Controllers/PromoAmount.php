<?php

namespace App\Http\Controllers;
use App\Http\Controllers\DB;
use App\Models\promoCode;

use Illuminate\Http\Request;

class PromoAmount extends Controller
{
    public function currentAmount($promoCode)
    {
      try {
        //$response=promoCode::find($promoCode);
        $response=promoCode::where('promoCode',$promoCode)->first();

        return $response->Amount;

      } catch (\Exception $e) {
          // echo "Conncted failed" .$e->getMessage();

      }

    }
}

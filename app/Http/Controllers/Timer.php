<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\promoCode;
use App\Http\Controllers\promoCodeCreator;

class Timer extends Controller
{
  public function ExpiryTime()

{

   $records = promoCode::all();

   foreach ($records as $record) {
       $respTime =strtotime($record->created_at);
       $daylater = strtotime("+24 hours",$respTime);
       $difference =$daylater-$respTime;
       $hours =$difference/3600;
       if($hours==0){
         $record->Expired=True;
         $record->Status="Inactive";
         $record->Deactivated=True;
         $records->save();
         return $records;

    }else{
      return $records;
    }

   }
   //

   //
   //  }
   //
    }


    }

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class codeGenerator extends Controller
{
    public function getCode()
    {

      try {

        $char="123456789SAFEBODA";
        $res="";
        for($i=0; $i<7; $i++)
        {
          $res .=$char[mt_rand(0,strlen($char))];
        }

        return $res;

      } catch (\Exception $e) {

      }




    }



}

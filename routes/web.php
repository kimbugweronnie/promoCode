<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\codeGenerator;
use App\Http\Controllers\promoCodeCreator;
use App\Http\Controllers\geoCode;
use App\Http\Controllers\locationGeocode;
use App\Http\Controllers\PromoAmount;
use App\Http\Controllers\Timer;
use App\Http\Controllers\Deactivated;
use App\Http\Controllers\userGeocode;
use App\Http\Controllers\ValidityCheck;
use App\Http\Controllers\changeRadius;
use App\Http\Controllers\validityDestination;
use App\Http\Controllers\createPolyline;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/promocode',[promoCodeCreator::class, 'generatePromoCode']);

Route::get('/timer',[Timer::class, 'ExpiryTime']);
Route::get('/amount/{promoCode}',[PromoAmount::class, 'currentAmount']);
Route::get('/deactivate/{promoCode}',[Deactivated::class, 'changeToDeactivated']);
Route::get('/user',[userGeocode::class, 'locationResponse']);
Route::get('/checkvalid',[ValidityCheck::class, 'ValidityCheck']);
Route::post('/changeradius',[changeRadius::class, 'changeRadius']);

Route::post('/destination',[validityDestination::class, 'locationResponse']);
// Route::get('/polyline',[createPolyline::class, 'encode']);

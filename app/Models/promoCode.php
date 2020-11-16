<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class promoCode extends Model
{
  public $table = 'promoCode';
  public $timestamps = true;
  protected $fillable = [
      'promoCode',
      'Amount',
      'Radius',
      'location',
      'Event',
      'latitude',
      'longtitude',
      'Status',
      'Deactivated',
      'Expired'



  ];


}

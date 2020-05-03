<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App\Interfaces\CashDatalnterface;

class CashData extends Model
{
   protected $table='cash_data';
   protected $guarded=['id'];

}

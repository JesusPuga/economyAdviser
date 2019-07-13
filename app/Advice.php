<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advice extends Model
{
   public function user()
   {
       return $this->belongsTo('App\User');
   }
}

//saul_sesv@hotmail.com
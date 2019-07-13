<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Earning extends Model
{
    protected $fillable = [
        'id','name', 'amount', 'user_id',
    ];

    public function user()
   {
       return $this->belongsTo('App\User');
   } 
}

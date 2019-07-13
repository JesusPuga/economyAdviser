<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
   public function user()
   {
       return $this->belongsTo('App\User');
   }

   public function priority()
    {
        return $this->belongsTo('App\Priority');
    }

   protected $fillable = [
    'name', 'amount', 'description', 'priority_id', 'user_id'
    ];
}

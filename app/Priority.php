<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Priority extends Model
{
    //
    public function expenses()
    {
        return $this->belongsToMany('App\Expense');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MileStone extends Model
{
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    protected $fillable = [
        'name', 'description','user_id'
    ];
}

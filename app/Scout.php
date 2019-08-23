<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scout extends Model
{
    public function comments()
    {
        return $this->hasMany('App\Comment','scout_id','id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    public function user()
    {
        return $this->morphOne('App\User','user');
    }
}

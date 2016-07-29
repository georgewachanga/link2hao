<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    public function users()
    {
        return $this->morphOne('App\User','user');
    }
}

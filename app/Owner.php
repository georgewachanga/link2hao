<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{

    public function user()
    {
        return $this->morphOne('App\User', 'user');
    }

}

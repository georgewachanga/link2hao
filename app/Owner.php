<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{

    public function users()
    {
        return $this->morphOne('App\User', 'user');
    }

}

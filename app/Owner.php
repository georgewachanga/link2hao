<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $fillable = ['fullname','phone'];

    public function user()
    {
        return $this->morphOne('App\User', 'user');
    }

}

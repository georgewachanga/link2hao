<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $fillable = ['fname','lname','email','phone'];
    public function user()
    {
        return $this->morphOne('App\User','user');
    }
}

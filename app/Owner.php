<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $fillable = ['idno','phone','location'];

    public function user(){
        return $this->morphMany('App\User', 'user');
    }

    public function properties(){
        return $this->hasMany('App\Property');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $fillable = ['id'];

    public function user(){

        return $this->morphMany('App\User');
    }

}

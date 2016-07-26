<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    protected $fillable = [];

    public function properties()
    {
        return $this->belongsToMany('App/Property');
    }
}

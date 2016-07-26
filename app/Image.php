<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable=['name', 'description'];


    public function property ()
    {
        return $this->belongsTo('App/Property');
    }
}

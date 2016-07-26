<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = ['name','description','location','price','category','imagepath'];

    public function features()
    {
        return $this->belongsToMany('App\Feature')->withTimestamps();
    }

    public function images()
    {
        return $this->hasMany('App\Image');
    }

}

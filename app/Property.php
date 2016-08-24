<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = ['name','description','price','imagepath','ownerIdNo','units','latitude', 'logintude'];

    public function features()
    {
        return $this->belongsToMany('App\Feature')->withTimestamps();
    }

    public function images()
    {
        return $this->hasMany('App\Image');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function location()
    {
        return $this->belongsTo('App\Location');
    }

    public function comments()
    {
       return $this->morphMany('App\Comment','commentable');
    }

}

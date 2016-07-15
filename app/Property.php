<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = ['name','description','location','imagepath','price','category'];

    public function owner(){
        return $this->belongsTo('App\User');
    }
}

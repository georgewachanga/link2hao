<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use File;

class Image extends Model
{
    protected $fillable=['name', 'description'];


    public function property ()
    {
        return $this->belongsTo('App\Property');
    }

    public function deleteImage()
    {
        if(File::exists(public_path()."/uploads/".$this->name))
        {
            File::delete(public_path().'/uploads/'.$this->name);
            $this->delete();
            return true;
        }
        else
        {
            return false;
        }
    }
}

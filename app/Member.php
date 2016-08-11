<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{

    /*
     * for every visit to this site, the visits column is updated
     */
    public function addVisit()
    {
        $visits = $this->visits;

        $visits += 1;

        $this->visits = $visits;

        $this->save();

        return $this->visits;
    }
}

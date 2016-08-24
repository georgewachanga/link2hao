<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname','lname','idno','phone', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
       'password', 'remember_token',
    ];

    public function changePassword()
    {
        $password = \Request::input('changePassword');
        if($password){
            $this->attributes['password'] = bcrypt($password);
        }

    }

    public function usertype(){

        return $this->morphTo();
    }

    public function isOwner(){
        if($this->user_type == "App\\Owner"){
            return true;
        }
        return false;
    }


            /*
             * this method will return the owner or the guest account morphed to the current user
             */
    public function getUser(){
        if($this->isOwner()) {
            return Owner::find($this->user_id);
        }
        else if($this->isGuest())
        {
            return Guest::find($this->user_id);
        }
        elseif($this->isAdmin())
        {
            return Admin::find($this->user_id);
        }
        else {
            return null;
        }
    }

    public function isGuest(){
        if($this->user_type == 'App\\Guest'){
            return true;
        }
        return false;
    }

    public function isAdmin(){
        if($this->user_type == 'App\\Admin'){
            return true;
        }
        return false;
    }

    public function userRole(){
        $userRole = \Request::input('userRole');
        if($userRole)
        {
            if($userRole == 1)
            {
                $this->makeAdmin();
            }
            elseif($userRole == 2)
            {
                $this->makeOwner();
            }
            elseif($userRole == 3)
            {
                $this->makeGuest();
            }
        }
    }

    protected function makeAdmin()
    {
        if($this->isAdmin())
        {
            return true;
        }
        elseif($this->getUser() !== null)
        {
            $this->getUser()->delete();
        }

        $admin = Admin::create();
        $admin->user()->save($this);

        return true;
    }

    protected function makeOwner()
    {
        if($this->isOwner())
        {
            return true;
        }
        elseif($this->getUser() !== null)
        {
            $this->getUser()->delete();
        }

        $owner = Owner::create();
        $owner->user()->save($this);

        return true;
    }

    protected function makeGuest()
    {
        if($this->isGuest())
        {
            return true;
        }
        elseif($this->getUser() !== null)
        {
            $this->getUser()->delete();
        }

        $guest = Guest::create();
        $guest->user()->save($this);

        return true;
    }
}

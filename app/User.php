<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    public function address() {
        return $this->hasOne('App\Address');
    }
    public function info()
    {
        return $this->hasOneThrough('App\Information', 'App\Car');
    }
    public function getFullNameAttribute()
    {
        return $this->first_name . " " . $this->last_name;
    }
}

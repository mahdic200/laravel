<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    // public function getLastNameAttribute($value)
    // {
    //     return $value ? : "no last name";
    // }
    // public function getFullNameAttribute()
    // {
    //     return $this->first_name . " " . $this->last_name;
    // }
    // public function setFirstNameAttribute($value)
    // {
    //     $this->attributes['first_name'] = strtolower($value);
    // }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

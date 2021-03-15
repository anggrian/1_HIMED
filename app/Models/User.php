<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
<<<<<<< HEAD
=======

>>>>>>> 563a2105213b8dd1958953ab55c134c9207294d7

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
<<<<<<< HEAD
        'name', 'email', 'password','tipe'
=======
        'name', 'email', 'password', 'tipe'
>>>>>>> 563a2105213b8dd1958953ab55c134c9207294d7
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


    public function accounts()
    {
        return $this->hasMany('App\Models\Account');
    }
}

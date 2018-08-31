<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    const AUTOPASS = 'password';
    const CHANGEPASS = 1;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'first_surname',
        'second_surname',
        'rut', 'cellphone',
        'email', 'num_worker',
        'depto', 'occupation',
        'password',
        'changepass',
        'rol',
        'authorization_method',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}

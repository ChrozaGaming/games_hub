<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class UserAdmin extends Authenticatable
{
    protected $table = 'users_admin'; // Tabel database

    protected $fillable = [
        'name',
        'email',
        'password',
        'credits',
    ];

    protected $hidden = [
        'password',
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles_M extends Model
{
    protected $table = 'tbl_roles';
    protected $fillable = [
        'role_name',
    ];

    protected $hidden = [
        'remember_token',
    ];
}

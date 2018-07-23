<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManageCampuses_M extends Model
{
    protected $table = 'tbl_campuses';
    protected $fillable = [
        'school_id','campus_name','principle_id','address','phone_office','email'
    ];

    protected $hidden = [
         'remember_token',
    ];
}

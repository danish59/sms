<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManageStudents_M extends Model
{
    protected $table = 'tbl_manage_students';
    protected $fillable = [
        'id','registration_id','roll_no','section_id','std_name',
        'father_name','session'
    ];

    protected $hidden = [
        'remember_token',
    ];
}

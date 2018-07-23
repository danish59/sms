<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassIncharge_M extends Model
{
    protected $table = 'tbl_class_incharge';
    protected $fillable = [
        'section_id','teacher_id','campus_id',
    ];

    protected $hidden = [
        'remember_token',
    ];
}

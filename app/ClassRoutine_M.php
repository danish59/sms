<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassRoutine_M extends Model
{
    protected $table = 'tbl_class_routine';
    protected $fillable = [
        'id','section_id','day','teacher_id','subject_id','time'
    ];

    protected $hidden = [
        'remember_token',
    ];

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentLeave_M extends Model
{
    protected $table = 'tbl_student_leave';
    protected $fillable = [
        'id','roll_no','section_id','student_name','application','date','status'
    ];

    protected $hidden = [
        'remember_token',
    ];

}

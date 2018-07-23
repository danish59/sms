<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result_M extends Model
{
    protected $table = 'tbl_result';
    protected $fillable = [
        'roll_no','section_id','subject_id','std_name','father_name','obtained_marks','total_marks','grade','exam_type','session'
    ];

    protected $hidden = [
        'remember_token',
    ];
}

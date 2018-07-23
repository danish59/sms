<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AvgResult_M extends Model
{
    protected $table = 'tbl_avg_result';
    protected $fillable = [
        'id','registration_id','roll_no','section_id','std_f_name','std_m_name','std_l_name',
        'father_name','total_obtained_marks','grand_total_marks','avg_result','avg_grade','status','examp_type','session'
    ];

    protected $hidden = [
        'remember_token',
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApplyOnline_M extends Model
{
    protected $table = 'tbl_admission';
    protected $fillable = [
        'id','campus_id','std_admission_no','std_f_name','std_m_name','std_l_name','std_cnic','father_name','father_cnic','date_birth',
        'gender','religion','cast','std_image','std_email','std_phone','address','profession','class','group',
        'hobbies','previous_school','brother_sister1','brother_sister2','brother_sister3'
    ];

    protected $hidden = [
        'remember_token',
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration_M extends Model
{
    protected $table = 'tbl_registration';
    protected $fillable = [
        'registration_id','campus_id','std_reg_num','class_id','std_f_name','std_m_name','std_l_name','std_cnic','father_name','father_cnic','date_birth',
        'gender','religion','cast','std_image','std_email','std_phone','address','profession','class','group',
        'hobbies','previous_school','brother_sister1','brother_sister2','brother_sister3','session'
    ];

    protected $hidden = [
        'remember_token',
    ];
}

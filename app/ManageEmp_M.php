<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManageEmp_M extends Model
{
    protected $table = 'tbl_employee';
    protected $fillable = [
        'id','campus_id','','emp_f_name','emp_m_name','emp_l_name','emp_cnic','father_name','father_cnic','date_birth',
        'gender','religion','cast','emp_image','emp_email','emp_phone','address','role','degree_certificate','cgpa_percentage',
        'university_college','passing_year','experience','duration','certificates_coureses1','certificates_coureses2',
        'certificates_coureses3','skil1','skil2','skil3','user_account','section_id'
    ];

    protected $hidden = [
        'remember_token',
    ];


}

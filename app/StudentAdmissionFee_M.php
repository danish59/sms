<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentAdmissionFee_M extends Model
{
    protected $table = 'tbl_student_admission_fee';
    protected $fillable = [
        'id','registration_id','class_id','student_name','admission_fee','monthly_fee','annual_funds_others','total_fee','monthly_concession','session'
    ];

    protected $hidden = [
        'remember_token',
    ];
}

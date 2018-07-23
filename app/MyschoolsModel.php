<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyschoolsModel extends Model
{
    protected $table = 'myschools';
    protected $fillable = ['reg_no','school_name','school_abrevation','reg_school_name','affiliation','total_students',
        'total_teachers','address','phone_office','phone_home','email','owner_name','owner_father_name','owner_gender',
    'owner_cnic','owner_cell','principle_name','principle_father_name','principle_gender','principle_cnic','principle_cell',
    'school_level','location','building_status','level_education','director_message','availability','image','agreement',];

    protected $hidden = [
        'remember_token',
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManageSubjects_M extends Model
{
    protected $table = 'tbl_subjects';
    protected $fillable = [
        'class_id','subject_name',
    ];

    protected $hidden = [
        'remember_token',
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeeStructure_M extends Model
{
    protected $table = 'tbl_fee_structure';
    protected $fillable = [
        'id','class_id','admission_fee','monthly_fee','annual_funds_others'
    ];

    protected $hidden = [
        'remember_token',
    ];
}

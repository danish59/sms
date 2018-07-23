<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MonthlyFee_M extends Model
{
    protected $table = 'tbl_monthly_fee';
    protected $fillable = [
        'id','registration_id','roll_no','section_id','month','year','tution_fee'
    ];

    protected $hidden = [
        'remember_token',
    ];
}

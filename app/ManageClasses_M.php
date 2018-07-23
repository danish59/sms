<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ManageSections_M;


class ManageClasses_M extends Model
{
    protected $table = 'tbl_classes';
    protected $fillable = [
        'campus_id','class_name',
    ];

    protected $hidden = [
        'remember_token',
    ];

    public function sec(){

        return $this->hasMany('App\ManageSections_M','class_id');
    }
}

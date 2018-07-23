<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use App\ManageClasses_M;

class ManageSections_M extends Model
{
    protected $table = 'tbl_sections';
    protected $fillable = [
        'class_id','section_name',
    ];

    protected $hidden = [
        'remember_token',
    ];

    public function classes(){
        return $this->belongsTo('App\ManageClasses_M','class_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendence_M extends Model
{
    protected $table = 'tbl_attendence';
    protected $fillable = [
        'id','roll_no','section_id','std_name','father_name','status','day_name','date'];

    protected $hidden = [
        'remember_token',
    ];

    public function findAttendence($section_id,$hidden_date){
       $findAttendence =  $this->where(['section_id'=>$section_id,'date'=>$hidden_date])->first();

       if ($findAttendence){
           $result = "marked";
           return $result;

       }
       else{
           $result = "failed";
           return $result;
       }

    }
}

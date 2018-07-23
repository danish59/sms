<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NoticBoard_M extends Model
{
    protected $table = 'tbl_noticboard';
    protected $fillable = [
        'id','discreption','date'
    ];

    protected $hidden = [
        'remember_token',
    ];
}

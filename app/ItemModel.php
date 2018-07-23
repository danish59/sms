<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemModel extends Model
{
    protected $table = 'tbl_items';
    protected $fillable = ['item_brand','item_type','item_code','item_price','item_description','availability','image'];

    protected $hidden = [
        'remember_token',
    ];
}

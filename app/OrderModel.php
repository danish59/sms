<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderModel extends Model
{
    protected $table = 'tbl_orders';
    protected $fillable = ['item_id','quantity','customer_name','customer_father','customer_gender','customer_cell','address','phone_home','agreement','status'];

    protected $hidden = [
        'remember_token',
    ];
}

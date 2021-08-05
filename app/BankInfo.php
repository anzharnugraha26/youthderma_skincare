<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankInfo extends Model
{
    protected $fillable = [
        'order_id', 'user_id', 'name', 'bank' , 'email' , 'number'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable =[

        'cid',
        'name',
        'email',
        'phone',
        'address',
        'pmonth',
        'bill',
        'duemonth',
        'due',
        'status',

    ];
}

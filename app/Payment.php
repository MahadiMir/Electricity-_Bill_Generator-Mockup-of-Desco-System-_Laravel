<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
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
        'vat',
        'total',
        'status',

    ];
}

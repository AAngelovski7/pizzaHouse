<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    //protected $table = 'some_name';
    //make array into json string
    protected $casts = [
        'toppings' => 'array'
    ];
}

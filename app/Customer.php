<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    //Option1 
    // protected $fillable=['name','email'];
    //Option-2 
    protected $guarded=[

    ];
}

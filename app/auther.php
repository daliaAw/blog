<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class auther extends Model
{
    protected $fillable=[
        'name','avatar','email','password'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $fillable = [
        'firstname',
        'lastname',
        'username',
        'birthDay',
        'bio',
        'salary',
        'rating',
        'fired'
    ];
}

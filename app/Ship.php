<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ship extends Model
{
    protected $table = 'ship';

    protected $hidden = [
        'password', 'remember_token',
    ];
}

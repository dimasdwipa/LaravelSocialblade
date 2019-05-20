<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class google extends Model
{
    protected $fillable = [
        'name', 'email', 'password', 'provider','provider_id'
    ];
}

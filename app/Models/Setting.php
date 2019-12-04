<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'about_us',
        'cotact',
        'address',
        'email',
        'slogan'
    ];
}

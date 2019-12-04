<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    
    public function users()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
    protected $fillable = [
        'name',
        'user_id',
    ];
}

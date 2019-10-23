<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function users()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
    public function posts()
    {
        return $this->belongsTo('App\Models\Post', 'post_id');
    }
    protected $fillable = [
        'post_id',
        'content',
        'user_id',
        'is_active'
    ];
}

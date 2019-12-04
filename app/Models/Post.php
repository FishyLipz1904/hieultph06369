<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function users()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
    public function categories()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }
    protected $fillable = [
        'title',
        'content',
        'category_id',
        'user_id',
        'filename'
    ];
}

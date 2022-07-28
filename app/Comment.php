<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
    public function commentable()
    {
        return $this->morphTo();
    }
    
    // public function post()
    // {
    //     return $this->belongsTo('App\Post');
    // }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public function tags()
    {
        return $this->morphToMany('App\Tag', 'taggable');
    }
    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }
}

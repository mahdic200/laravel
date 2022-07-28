<?php

namespace App;

use App\Scopes\StatusScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'title', 'user_id'
    ];

    public function tags()
    {
        return $this->belongsToMany('App\Tag')->withPivot('value');
        // return $this->belongsToMany('App\Tag')->withTimestamps();
    }
}

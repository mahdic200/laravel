<?php

namespace App;

use App\Scopes\StatusScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    protected $fillable = [
        'title', 'user_id'
    ];
    public function getFullNameAttribute()
    {
        return $this->first_name . " " . $this->last_name;
    }
}

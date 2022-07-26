<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    // protected $guarded = ['id'];
    protected $fillable = ['id'];

    public function scopeActive($query, $status = 1)
    {
        return $query->where('status', $status);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // because we're doing data validation before doing the post require
    // so we can tell laravel is ok to not guard everything
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

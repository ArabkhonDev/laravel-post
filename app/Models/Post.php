<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Post extends Pivot
{
    protected $fillable = [
        'title',
        'short_content',
        'body',
        'photo'
    ];
}

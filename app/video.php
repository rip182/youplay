<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    protected $fillable = [
        'title',
        'body',
        'video',
        'user_id',
        'duration'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

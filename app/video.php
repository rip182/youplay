<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    protected $fillable = [
        'title',
        'body',
        'video'
    ];

    public function user()
    {
        $this->belongsTo('App/User');
    }
}

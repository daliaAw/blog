<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $fillable=[
        'title','time_written',
        'context','author_id','category_id',
        'featured_image','vote_up','vote_down'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class Topic extends Model
{
    protected $fillable=[
        'genre', 'title', 'body', 'image-url'
    ];

    public function topics(){
        return $this->hasMany('App\Post');
    }
}

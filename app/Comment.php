<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class Comment extends Model
{
    protected $fillable = [
        'title','name','content',
    ];

    public function post(){
        return $this->belongsTo('App\Post');
    }
}

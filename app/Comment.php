<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class Comment extends Model
{
    protected $fillable = [
        'title','name','body'
    ];

    public function post(){
        return $this->belongsTo('App\Post');
    }
}

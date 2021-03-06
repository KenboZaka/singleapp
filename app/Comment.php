<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
use App\User;

class Comment extends Model
{
    protected $fillable = [
        'user_id', 'post_id','content',
    ];

    public function posts(){
        return $this->belongsTo('App\Post');
    }

    public function users(){
        return $this->belongsTo('App\User');
    }
}

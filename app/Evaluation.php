<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
use App\User;

class Evaluation extends Model
{
    protected $fillable=[
        'evaluation'
    ];

    public function posts(){
        return $this->belongsTo('App\Post');
    }

    public function users(){
        return $this->belongsTo('App\User');
    }
}

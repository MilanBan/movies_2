<?php

namespace App;

use App\Comment;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $guarded = ['id'];

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}

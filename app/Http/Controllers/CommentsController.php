<?php

namespace App\Http\Controllers;

use App\Comment;

class CommentsController extends Controller
{
    public function index(){
        $comments = Comment::all();
    }
}

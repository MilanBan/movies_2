<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests\CommentRequest;
use App\Movie;

class CommentsController extends Controller
{
    public function store(CommentRequest $request, $id){
        $movie = Movie::find($id);
        $movie->comments()->create(request()->all());

        return redirect('/movies/' . $movie->id);
    }
}

@extends('layouts.master')

@section('content')

<h1>{{$movie->title}}</h1>
<div>
    <p>{{$movie->director}}</p>
    <p>{{$movie->age}}</p>
    <p>{{$movie->genre}}</p>
    <p>{{$movie->storyline}}</p>
</div>
<div>
    @foreach($movie->comments as $comment)
        <hr>
        <p>{{$comment->content}}</p>
        <p>{{$comment->created_at}}</p>
    @endforeach
</div>
<form action="/movies/{{$movie->id}}/comment" method="POST">
@csrf
<hr><hr>
<!-- obavezno hidden da bi povezao comentar sa id-jem filma -->
<input type="hidden" name="movie_id" value="{{ $movie->id }}"> 
<div class="form-group">
    <input type="text" class="form-control"  placeholder="content" name="content">
</div>
<div class="form-group">
    <button type="submit" class="btn btn-primary">Add comment</button>
</div>
</form>
<div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</div>
@endsection
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

@endsection
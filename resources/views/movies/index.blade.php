@extends('layouts.master')

@section('content')

@foreach($movies as $movie)
<H3><a href="/movies/{{$movie->id}}">{{$movie->title}}</a></H3>
<div>
    <p>{{$movie->storyline}}</p>
</div>
@endforeach

@endsection
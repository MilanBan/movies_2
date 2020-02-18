@extends('layouts.master')

@section('content')

<form method="POST" action="/movies">
@csrf
<div class="form-group">
    <label for="title">Movie title</label>
    <input type="text" class="form-control"  placeholder="movie title" name="title"  value = {{old('title')}} >
</div>
<div class="form-group">
    <label for="genre">Movie genre</label>
    <input type="text" class="form-control"  placeholder="movie genre" name="genre"  value = {{old('genre')}} >
</div>
<div class="form-group"> 
    <label for="director">Movie director</label>
    <input type="text" class="form-control"  placeholder="director" name="director"  value = {{old('director')}}>
</div>
<div class="form-group">
    <label for="year">Year</label>
    <input type="text" class="form-control"  placeholder="year" name="year"  value = {{old('year')}}>
</div>
<div class="form-group">
    <label for="storyline">Storyline</label>
    <input type="text" class="form-control"  placeholder="storyline" name="storyline"  value = {{old('storyline')}}>
</div>
<div class="form-group">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>

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
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MovieRequest;
use App\Movie;

class MoviesController extends Controller
{
    public function index(){
        $movies = Movie::all();

        return view('movies.index', compact('movies'));
    }

    public function show($id){
        $movie = Movie::findOrFail($id);

        return view('movies.show', compact('movie'));
    }

    public function create(){
        return view('movies.create');
    }

    public function store(MovieRequest $request){ // zamenis za svoj request

        // $validatedData = $request->validate([
        //     'title' => 'required|max:255',
        //     'genre' => 'required',
        //     'director' => 'required',
        //     'year' => 'required|between:1920,2020',
        //     'storyline' => 'reqiured|max:1000'
        // ]);

        // $movie = new Movie;
        // $movie->title = $request->title;
        // $movie->genre = $request->genre;
        // $movie->director = $request->director;
        // $movie->year = $request->year;
        // $movie->storyline = $request->storyline;

        // $movie->save();

        //kreiranjem MovieRequest-a, zaobilazimo se ovo instaciranje
        
        $movi = Movie::create(request()->all());
        return redirect('/movies');

    }
}

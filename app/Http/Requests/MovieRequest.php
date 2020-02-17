<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieRequest extends FormRequest
{
    public function authorize()
    {
        return true; // menjas u true
    }

    public function rules()
    {
        return [ //pises uslove
        'title' => 'required|max:255',
        'genre' => 'required',
        'director' => 'required',
        'year' => 'required|integer|between:1900,2020',
        'storyline' => 'required|max:1000'
        ];
    }
}
//  php artisan make:request MovieRequest
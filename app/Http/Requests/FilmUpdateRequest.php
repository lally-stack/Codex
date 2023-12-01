<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilmUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // public function authorize()
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "idFilm" => 'int',
            "idCategoriaFilm" => 'int',
            "titolo" => 'string|max:255', //required|
            "descrizione" => 'required|string|max:1000',
            "durata" => 'required|string|max:10',
            "regista" => 'required|string|max:45',
            "attori" => 'required|string|max:255',
            "anno" => 'required|string|max:10'
        ];
    }
}

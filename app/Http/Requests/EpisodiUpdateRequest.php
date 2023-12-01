<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EpisodiUpdateRequest extends FormRequest
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
            "idSerieTv" => 'int',
            "titolo" => 'required|string|max:255',
            "descrizione" => 'string|max:1000',
            "numStagione" => 'int',
            "numEpisodio" => 'int',
            "durata" => 'string|max:10'
        ];
    }
}

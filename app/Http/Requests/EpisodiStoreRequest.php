<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EpisodiStoreRequest extends FormRequest
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
            "idSerieTv" => 'required|int',
            "titolo" => 'required|string|max:255',
            "descrizione" => 'required|string|max:1000',
            "numStagione" => 'required|int',
            "numEpisodio" => 'required|int',
            "durata" => 'required|string|max:10'
        ];
    }
}

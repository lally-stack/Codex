<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SerieTvUpdateRequest extends FormRequest
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
            "idCategoriaSerie" => "int",
            "titolo" => "string|max:255",
            "descrizione" =>"string|max:1000",
            "totStagioni" => "int",
            "numEpisodi" => "int",
            "regista" => "string|max:45",
            "attori" => "string|max:255",
            "annoInizio" => "string|max:10",
            "annoFine" => "string|max:10"
        ];
    }
}

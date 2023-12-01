<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SerieTvStoreRequest extends FormRequest
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
            "idCategoriaSerie" => "required|int",
            "titolo" => "required|string|max:255",
            "descrizione" =>"required|string|max:1000",
            "totStagioni" => "required|int",
            "numEpisodi" => "required|int",
            "regista" => "required|string|max:45",
            "attori" => "required|string|max:255",
            "annoInizio" => "required|string|max:10",
            "annoFine" => "string|max:10"
        ];
    }
}

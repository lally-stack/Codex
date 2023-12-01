<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContattiStoreRequest extends FormRequest
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
            "idContatto" => 'int',
            "idIndirizzo" => 'int', // 'required|int',
            "idRecapito" => 'int', // 'required|int',
            "idNazione" => 'int', // 'required|int',
            "nome" => 'string|max:45',
            "cognome" => 'required|string|max:45',
            "email" => 'required|string|max:45',
            "sesso" => 'int|max:3',
            "citta" => 'required|string|max:45',
            "provincia" => 'required|string|max:45',
            "dataDiNascita" => 'required|string|max:45',
            "idStato" => 'int'
        ];
    }
}

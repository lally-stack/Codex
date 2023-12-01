<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContattiUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        // $rules = parent::rules();
        // return $rules;
        return [
            "idContatto" => 'int',
            "idIndirizzo" => 'int', // 'required|int',
            "idRecapito" => 'int', // 'required|int',
            "idNazione" => 'int', // 'required|int',
            "nome" => 'string|max:45',
            "cognome" => 'string|max:45',
            "email" => 'string|max:45',
            "sesso" => 'int|max:3',
            "citta" => 'string|max:45',
            "provincia" => 'string|max:45',
            "dataDiNascita" => 'string|max:45',
            "idStato" => 'int' //required|
        ];
   
    }
}

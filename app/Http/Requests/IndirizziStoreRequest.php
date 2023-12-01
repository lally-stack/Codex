<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IndirizziStoreRequest extends FormRequest
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
            'idIndirizzo' => 'int',
            'idTipoIndirizzo' => 'required|int',
            'idContattoInd' => 'required|int',
            'idNazioneInd' => 'required|int',
            'idComuneItaliano' => 'required|int',
            'cap' => 'required|string|max:50',
            'indirizzo' => 'required|string|max:255',
            'civico' => 'required|string|max:50'
        ];
    }
}

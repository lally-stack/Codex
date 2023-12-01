<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IndirizziUpdateRequest extends FormRequest
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
            'idTipoIndirizzo' => 'int',
            'idContattoInd' => 'int',
            'idNazioneI' => 'int',
            'idComuneItaliano' => 'int',
            'cap' => 'string|max:50',
            'indirizzo' => 'string|max:255',
            'civico' => 'string|max:50'
        ];
    }
}

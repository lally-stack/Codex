<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecapitiStoreRequest extends FormRequest
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
            'idRecapito' => 'int',
            'idContattoRec' => 'required|int',
            'idTipoRecapito' => 'required|int',
            'recapito' => 'required|string|max:45'
        ];
    }
}

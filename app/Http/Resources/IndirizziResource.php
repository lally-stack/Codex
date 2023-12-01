<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class IndirizziResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return $this->getCampi();
    }

    // PROTECTED FUNCTION
    protected function getCampi()
    {
        return [
            'idIndirizzo' => $this->idIndirizzo,
            'idTipoIndirizzo' => $this->idTipoIndirizzo,
            'idContattoInd' => $this->idContattoInd,
            'idNazioneInd' => $this->idNazioneI,
            'idComuneItaliano' => $this->idComuneItaliano,
            'cap' => $this->cap,
            'indirizzo' => $this->indirizzo,
            'civico' => $this->civico
        ];
    }
}

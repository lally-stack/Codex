<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ContattiResource extends JsonResource
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

    protected function getCampi() {
        return [
            'idContatto'=>$this->idContatto,
            'idIndirizzo'=>$this->idIndirizzo,
            'idRecapito'=>$this->idRecapito,
            'idNazione'=>$this->idNazione,
            'nome'=>$this->nome,
            'cognome'=>$this->cognome,
            'email'=>$this->email,
            'sesso'=>$this->sesso,
            'citta'=>$this->citta,
            'provincia'=>$this->provincia,
            'dataDiNascita'=>$this->dataDiNascita,
            'idStato'=>$this->idStato
        ];
        
    }
}

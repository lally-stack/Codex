<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SerieTvResource extends JsonResource
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
            'idSerieTv' => $this-> idSerieTv,
            'idCategoriaSerie' => $this->idCategoriaSerie,
            'titolo' => $this->titolo,
            'descrizione' => $this->descrizione,
            'totStagioni' => $this->totStagioni,
            'numEpisodi' => $this->numEpisodi,
            'regista' => $this->regista,
            'attori' => $this->attori,
            'annoInizio' => $this->annoInizio,
            'annoFine' => $this-> annoFine
        ];
    }
}

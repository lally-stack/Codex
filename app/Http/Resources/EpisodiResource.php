<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EpisodiResource extends JsonResource
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
                'idEpisodio' => $this-> idEpisodio,
                'idSerieTv' => $this->idSerieTv,
                'titolo' => $this->titolo,
                'descrizione' => $this->descrizione,
                'numStagione' => $this -> numStagione,
                'numEpisodio' => $this -> numEpisodio,
                'durata' => $this -> durata
            ];
        }
}

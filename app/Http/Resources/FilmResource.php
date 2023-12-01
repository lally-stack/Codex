<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FilmResource extends JsonResource
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
            'idFilm'=>$this->idFilm,
            'idCategoriaFilm' => $this->idCategoriaFilm,
            'titolo' => $this->titolo,
            'descrizione' => $this->descrizione,
            'durata' => $this -> durata,
            'regista' => $this -> regista,
            'attori' => $this -> attori,
            'anno' => $this -> anno
        ];
    }
}

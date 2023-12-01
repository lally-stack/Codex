<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RecapitiResource extends JsonResource
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
                'idRecapito'=>$this->idRecapito,
                'idContattoRec' => $this->idContattoRec,
                'idTipoRecapito' => $this->idTipoRecapito,
                'recapito' => $this->recapito
            ];
        }
}

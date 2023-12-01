<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContattiStoreRequest;
use App\Http\Resources\ContattoResource;
use App\Models\Contatto;

class RegistrazioneController extends Controller
{
    /**
     * Store a newly created resource in storage.
     * Sono ancora da inserire tutti i check del caso
     *
     * @param  ContattiStoreRequest  $request
     * @return JsonResource
     */
    public function store(ContattiStoreRequest $request)
    {
        $data = $request->validated();
        $newRegistrazione = Contatto::create($data);
        return new ContattoResource($newRegistrazione);

    }

}

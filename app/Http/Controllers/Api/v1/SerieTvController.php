<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Support\Facades\DB;
use App\Models\SerieTv;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SerieTvStoreRequest;
use App\Http\Requests\SerieTvUpdateRequest;
use App\Http\Resources\SerieTvCollection;
use App\Http\Resources\SerieTvCompletoCollection;
use App\Http\Resources\SerieTvCompletoResource;
use App\Http\Resources\SerieTvResource;
use Illuminate\Support\Facades\Gate;

class SerieTvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Gate::allows("leggere")) {
            if(Gate::allows("Amministratore")) {
                $serie = SerieTv::all();
            } else {
                $serie = SerieTv::all();
                return $this->creaCollection($serie);
            }
            return new SerieTvCollection($serie);
        } else {
            abort(403, "Non sei autorizzato");
        }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  SerieTvStoreRequest $request
     * @return JsonResource
     */
    public function store(SerieTvStoreRequest $request)
    {
        if(Gate::allows("creare")) {
            if(Gate::allows("Amministratore")) {
                $data = $request->validated();
                $newSerie = SerieTv::create($data);
                return new SerieTvResource($newSerie);
            } else {
                abort(403, "Non sei autorizzato");
            }
        } else {
            abort(403, "Non sei autorizzato");
        }

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\SerieTv $idSerieTv
     * @return JsonResource
     */
    public function show(SerieTv $idSerieTv)
    {
        if(Gate::allows("leggere")) {
            if(Gate::allows("Amministratore")) {
                $risorsa = new SerieTvCompletoResource($idSerieTv);
            } else {
                $risorsa = new SerieTvResource($idSerieTv);
            }
            return $risorsa;
        } else {
            abort(403, "Non sei autorizzato");
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  SerieTvUpdateRequest $request
     * @param  \App\Models\SerieTv  $serieTv
     * @return \Illuminate\Http\Response
     */
    public function update(SerieTvUpdateRequest $request, SerieTv $serieTv, $idSerieTv)
    {
        if(Gate::allows("aggiornare")) {
            if(Gate::allows("Amministratore")) {
                $serieTv = SerieTv::findOrFail($idSerieTv);
                $data = $request -> validated();
                $serieTv->update($data);
                $serieTv->save();
                return new SerieTvResource($serieTv);
            } else {
                abort(403, "Non sei autorizzato");
            }
        } else {
            abort(403, "Non sei autorizzato");
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SerieTv  $serieTv
     * @return JsonResource
     */
    public function destroy(SerieTv $serieTv, $idSerieTv)
    {
        if(Gate::allows("eliminare")) {
            if (Gate::allows("Amministratore")) {
                $serieTv = SerieTv::findOrFail($idSerieTv);
                $serieTv->deleteOrFail();
                return response()->noContent();
            } else {
                abort(403, "Azione non autorizzata");
            }
        } else {
            abort(403, "Azione non autorizzata");
        }

    }

    //__________________________________________________
    // PROTECTED
    protected function creaCollection($serie)
    {
        $risorsa = null;
        if (request("tipo") != null && request("tipo") == "completo") {
            $risorsa = new SerieTvCompletoCollection($serie);
        } else {
            $risorsa = new SerieTvCollection($serie);
        }
        return $risorsa;
    }
}

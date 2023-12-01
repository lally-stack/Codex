<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Resources\EpisodiCollection;
use App\Http\Resources\EpisodiCompletoCollection;
use App\Http\Controllers\Controller;
use App\Http\Requests\EpisodiStoreRequest;
use App\Http\Requests\EpisodiUpdateRequest;
use App\Http\Resources\EpisodiResource;
use App\Models\Episodi;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class EpisodiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Gate::allows("leggere")) {
            if (Gate::allows("Amministratore")) {
                $episodi = Episodi::all();
            } else {
                $episodi = Episodi::all();
                return $this->creaCollection($episodi);
            }
            return new EpisodiCollection($episodi);
        } else {
            abort(403, "Non sei autorizzato");
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return JsonResouce
     */
    public function indexSerie($idSerieTv)
    {
        if (Gate::allows("leggere")) {
            if (Gate::allows("Amministratore")) {
                $episodi = Episodi::all()->where('idSerieTv', $idSerieTv);
            } else {
                $episodi = Episodi::all()->where('idSerieTv', $idSerieTv);
                return $this->creaCollection($episodi);
            }
            return new EpisodiCollection($episodi);
        } else {
            abort(403, "Non sei autorizzato");
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return JsonResouce
     */
    public function indexStag($idSerieTv, $numStagione)
    {
        if (Gate::allows("leggere")) {
            if (Gate::allows("Amministratore")) {
                $episodi = Episodi::all()
                    // ->select('episodi.*')
                    ->where('idSerieTv', $idSerieTv)
                    ->where('numStagione', $numStagione);
                return new EpisodiCompletoCollection($episodi);
            } else {
                $episodi = Episodi::all()
                    // ->select('episodi.*')
                    ->where('idSerieTv', $idSerieTv)
                    ->where('numStagione', $numStagione);
                return new EpisodiCollection($episodi);
            }
        } else {
            abort(403, "Non sei autorizzato");
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return JsonResouce
     */
    public function indexEpi($idSerieTv, $numStagione, $numEpisodio)
    {
        if (Gate::allows("leggere")) {
            if (Gate::allows("Amministratore")) {
                $episodi = Episodi::all()
                    ->where('idSerieTv', $idSerieTv)
                    ->where('numStagione', $numStagione)
                    ->where('numEpisodio', $numEpisodio);
                return new EpisodiCompletoCollection($episodi);
            } else {
                $episodi = Episodi::all()
                    ->where('idSerieTv', $idSerieTv)
                    ->where('numStagione', $numStagione)
                    ->where('numEpisodio', $numEpisodio);
                return new EpisodiCollection($episodi);
            }
        } else {
            abort(403, "Non sei autorizzato");
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  EpisodiStoreRequest  $request
     * @return JsonResource
     */
    public function store(EpisodiStoreRequest $request)
    {
        if (Gate::allows("creare")) {
            if (Gate::allows("Amministratore")) {
                $data = $request->validated();
                $newEpisode = Episodi::create($data);
                return new EpisodiResource($newEpisode);
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
     * @param  \App\Models\Episodi  $episodi
     * @return \Illuminate\Http\Response
     */
    // public function show(Episodi $episodi)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  EpisodiUpdateRequest  $request
     * @param  \App\Models\Episodi  $episodi
     * @return JsonResource
     */
    public function update(EpisodiUpdateRequest $request, Episodi $episodi, $idEpisodio)
    {
        if(Gate::allows("aggiornare")) {
            if(Gate::allows("Amministratore")) {
                $episodi = Episodi::findOrFail($idEpisodio);
                $data = $request->validated();
                $episodi->update($data);
                $episodi->save();
                return new EpisodiResource($episodi);
            } else {
                abort(403, "Non sei un amministratore");
            }
        } else {
            abort(403, "Non sei autorizzato");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Episodi  $episodi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Episodi $episodi, $idEpisodio)
    {
        if(Gate::allows("eliminare")) {
            if(Gate::allows("Amministratore")) {
                $episodi = Episodi::findOrFail($idEpisodio);
                $episodi->deleteOrFail();
                return response()->noContent();
            } else {
                abort(403, "Non sei un admin");
            }
        } else {
            abort(403, "Non sei abilitato");
        }
    }

    //__________________________________________________
    // PROTECTED
    protected function creaCollection($episodi)
    {
        $risorsa = null;
        if (request("tipo") != null && request("tipo") == "completo") {
            $risorsa = new EpisodiCompletoCollection($episodi);
        } else {
            $risorsa = new EpisodiCollection($episodi);
        }
        return $risorsa;
    }
}

<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\RecapitiStoreRequest;
use App\Http\Requests\RecapitiUpdateRequest;
use App\Http\Resources\RecapitiCollection;
use App\Http\Resources\RecapitiCompletoCollection;
use App\Http\Resources\RecapitiCompletoResource;
use App\Http\Resources\RecapitiResource;
use App\Models\Recapiti;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class RecapitiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResource
     */
    public function index()
    {
        if (Gate::allows("leggere")) {
            if (Gate::allows("Amministratore")) {
                $recapiti = Recapiti::all();
                return new RecapitiCompletoCollection($recapiti);
            } else {
                $recapiti = Recapiti::all();
                return new RecapitiCollection($recapiti);
            }
        } else {
            abort(403, "Non abilitato");
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  RecapitiStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RecapitiStoreRequest $request)
    {
        if (Gate::allows("creare")) {
            if (Gate::allows("Amministratore")) {
                $data = $request->validated();
                $newRecapito = Recapiti::create($data);
                return new RecapitiResource($newRecapito);
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
     * @param  \App\Models\Recapiti  $idRecapito
     * @return JsonResource
     */
    public function show(Recapiti $idRecapito)
    {
        if (Gate::allows("leggere")) {
            if (Gate::allows("Amministratore")) {
                $risorsa = new RecapitiCompletoResource($idRecapito);
                return $risorsa;
            } else {
                $risorsa = new RecapitiResource($idRecapito);
                return $risorsa;
            }
        } else {
            abort(403, "Non sei autorizzato");
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  RecapitiUpdateRequest  $request
     * @param  \App\Models\Recapiti  $recapito
     * @return JsonResource
     */
    public function update(RecapitiUpdateRequest $request, Recapiti $recapito, $idRecapito)
    {
        if (Gate::allows("aggiornare")) {
            if (Gate::allows("Amministratore")) {
                $recapito = Recapiti::findOrFail($idRecapito);
                $data = $request->validated();
                $recapito->update($data);
                $recapito->save();
                return new RecapitiResource($recapito);
            } else {
                abort(403, "Non sei abilitato");
            }
        } else {
            abort(403, "Non sei abilitato");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recapiti  $recapito
     * @return JsonResource
     */
    public function destroy(Recapiti $recapito, $idRecapito)
    {
        if (Gate::allows("aggiornare")) {
            if (Gate::allows("Amministratore")) {
                $recapito = Recapiti::findOrFail($idRecapito);
                $recapito->deleteOrFail();
                return response()->noContent();
            } else {
                abort(403, "Non sei autorizzato");
            }
        } else {
            abort(403, "Non sei autorizzato");
        }
    }

    /**
     * Filtra i recapiti in base al tipo
     * @param \App\Models\Recapiti $idTipoRecapito
     * @return JsonResource
     */
    public function tipoRecapito($idTipoRecapito)
    {
        if (Gate::allows("leggere")) {
            if (Gate::allows("Amministratore")) {
                $ris = DB::table("tipo_recapiti")
                    ->join("recapiti", "tipo_recapiti.idTipoRecapito", "=", "recapiti.idTipoRecapito")
                    ->select(
                        "recapiti.*",
                        "tipo_recapiti.*"
                    )
                    ->where("tipo_recapiti.idTipoRecapito", "=", $idTipoRecapito)
                    ->get();
                return $ris;
            } else {
                $ris = DB::table("tipo_recapiti")
                    ->join("recapiti", "tipo_recapiti.idTipoRecapito", "=", "recapiti.idTipoRecapito")
                    ->select(
                        // "tipo_recapiti.recapito",
                        "recapiti.idRecapito",
                        "recapiti.idContattoRec",
                        "recapiti.idTipoRecapito",
                        "recapiti.recapito",
                        // "tipo_recapiti.recapito"
                    )
                    ->where("tipo_recapiti.idTipoRecapito", "=", $idTipoRecapito)
                    ->get();
                return $ris;
            }
        } else {
            abort(403, "Non sei autorizzato");
        }
    }

    //__________________________________________________
    // PROTECTED
    protected function creaCollection($recapito)
    {
        $risorsa = null;
        if (request("tipo") != null && request("tipo") == "completo") {
            $risorsa = new RecapitiCompletoCollection($recapito);
        } else {
            $risorsa = new RecapitiCollection($recapito);
        }
        return $risorsa;
    }
}

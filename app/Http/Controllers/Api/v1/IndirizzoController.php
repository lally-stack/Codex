<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\IndirizziStoreRequest;
use App\Http\Requests\IndirizziUpdateRequest;
use App\Http\Resources\IndirizziCollection;
use App\Http\Resources\IndirizziCompletoCollection;
use App\Http\Resources\IndirizziCompletoResource;
use App\Http\Resources\IndirizziResource;
use App\Models\Indirizzo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
// use Illuminate\Http\Request;

class IndirizzoController extends Controller
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
                $indirizzo = Indirizzo::all();
                return new IndirizziCompletoCollection($indirizzo);
            } else {
                $indirizzo = Indirizzo::all();
                return new IndirizziCollection($indirizzo);
            }
        } else {
            abort(403, "Non sei abilitato");
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  IndirizziStoreRequest  $request
     * @return JsonResource
     */
    public function store(IndirizziStoreRequest $request)
    {
        if (Gate::allows("creare")) {
            if (Gate::allows("Amministratore")) {
                $data = $request->validated();
                $newIndirizzo = Indirizzo::create($data);
                return new IndirizziResource($newIndirizzo);
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
     * @param  \App\Models\Indirizzo  $idIndirizzo
     * @return JsonResource
     */
    public function show(Indirizzo $idIndirizzo)
    {
        if (Gate::allows("leggere")) {
            if (Gate::allows("Amministratore")) {
                $risorsa = new IndirizziCompletoResource($idIndirizzo);
                return $risorsa;
            } else {
                $risorsa = new IndirizziResource($idIndirizzo);
                return $risorsa;
            }
        } else {
            abort(403, "Non sei autorizzato");
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  IndirizziUpdateRequest  $request
     * @param  \App\Models\Indirizzo  $indirizzo
     * @return JsonResource
     */
    public function update(IndirizziUpdateRequest $request, Indirizzo $indirizzo, $idIndirizzo)
    {
        if (Gate::allows("aggiornare")) {
            if (Gate::allows("Amministratore")) {
                $indirizzo = Indirizzo::findOrFail($idIndirizzo);
                $data = $request->validated();
                $indirizzo->update($data);
                $indirizzo->save();
                return new IndirizziResource($indirizzo);
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
     * @param  \App\Models\Indirizzo  $indirizzo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Indirizzo $indirizzo, $idIndirizzo)
    {
        if (Gate::allows("eliminare")) {
            if (Gate::allows("Amministratore")) {
                $indirizzo = Indirizzo::findOrFail($idIndirizzo);
                $indirizzo->deleteOrFail();
                return response()->noContent();
            } else {
                abort(403, "Non sei abilitato");
            }
        } else {
            abort(403, "Non sei abilitato");
        }
    }

    /**
     * Filtra gli indirizzi in base al tipo
     * @param \App\Models\Indirizzo $idTipoIndirizzo
     * @return JsonResource
     */
    public function tipoIndirizzo($idTipoIndirizzo)
    {
        if (Gate::allows("leggere")) {
            if (Gate::allows("Amministratore")) {
                $ris = DB::table("tipo_indirizzi")
                    ->join("indirizzi", "tipo_indirizzi.idTipoIndirizzo", "=", "indirizzi.idTipoIndirizzo")
                    ->select(
                        "indirizzi.*",
                        "tipo_indirizzi.*"
                    )
                    ->where("tipo_indirizzi.idTipoIndirizzo", "=", $idTipoIndirizzo)
                    ->get();
                return $ris;
            } else {
                $ris = DB::table("tipo_indirizzi")
                    ->join("indirizzi", "tipo_indirizzi.idTipoIndirizzo", "=", "indirizzi.idTipoIndirizzo")
                    ->select(
                        "indirizzi.idIndirizzo",
                        "indirizzi.idContattoInd",
                        "indirizzi.idComuneItaliano",
                        "indirizzi.indirizzo",
                        "indirizzi.cap",
                        "indirizzi.civico"
                    )

                    //  "tipo_indirizzi.indirizzo")
                    ->where("tipo_indirizzi.idTipoIndirizzo", "=", $idTipoIndirizzo)
                    ->get();
                return $ris;
            }
        } else {
            abort(403, "Non sei abilitato");
        }
    }
}

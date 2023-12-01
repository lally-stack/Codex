<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContattiStoreRequest;
use App\Http\Requests\ContattiUpdateRequest;
use App\Http\Resources\ContattiCollection;
use App\Http\Resources\ContattiCompletoCollection;
use App\Http\Resources\ContattiCompletoResource;
use App\Http\Resources\ContattiResource;
use App\Models\Contatto;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\DB;


class ContattiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResouce
     */
    public function index()
    {
        // Problema con la collection
        if (Gate::allows("leggere")) {
            if (Gate::allows("Amministratore")) {
                $contatto = Contatto::all();
                return new ContattiCompletoCollection($contatto);
            } else {
                $contatto = Contatto::all();
                return new ContattiCollection($contatto);
            }
        } else {
            abort(403, "Non sei autorizzato");
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ContattiStoreRequest $request
     * @return JsonResouce
     */
    public function store(ContattiStoreRequest $request)
    {
        if (Gate::allows("creare")) {
            if (Gate::allows("Amministratore")) {
                $data = $request->validated();
                $newContact = Contatto::create($data);
                return new ContattiResource($newContact);
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
     * @param  \App\Models\Contatti  $contatti
     * @return JsonResouce
     */
    public function show(Contatto $idContatto)
    {
        if (Gate::allows("leggere")) {
            if (Gate::allows("Amministratore")) {
                $risorsa = new ContattiCompletoResource($idContatto);
            } else {
                $risorsa = new ContattiResource($idContatto);
            }
            return $risorsa;
        } else {
            abort(403, "Non sei autorizzato");
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ContattiUpdateRequest $request
     * @param  \App\Models\Contatto  $contatto
     * @return JsonResouce
     */
    public function update(ContattiUpdateRequest $request, Contatto $contatto, $idContatto)
    {
        if (Gate::allows("aggiornare")) {
            if (Gate::allows("Amministratore")) {
                $contatto = Contatto::findOrFail($idContatto);
                $data = $request->validated();
                $contatto->update($data);
                $contatto->save();
                return new ContattiResource($contatto);
            } else {
                abort(403, "Puoi modificare solo il tuo contatto");
            }
        } else {
            abort(403, "Non sei autorizzato");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contatti  $contatti
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contatto $contatto, $idContatto)
    {
        if (Gate::allows("eliminare")) {
            if (Gate::allows("Amministratore")) {
                $contatto = Contatto::findOrFail($idContatto);
                $contatto->deleteOrFail();
                return response()->noContent();
            } else {
                abort(403, "Non sei un admin");
            }
        } else {
            abort(403, "Azione non autorizzata");
        }
    }

    /**
     * Get gli indirizzi degli utenti
     * @param \App\Models\Contatto $idContatto
     * @return JsonResource
     * 
     */
    public function contattiIndirizzi($idContatto)
    {
        if (Gate::allows("leggere")) {
            if (Gate::allows("Amministratore")) {
                $ris = DB::table("indirizzi")
                    ->join("contatti", "indirizzi.idContattoInd", "=", "contatti.idContatto")
                    ->select(
                        "contatti.*",
                        "indirizzi.*"
                    )
                    ->where("indirizzi.idContattoInd", "=", $idContatto)
                    ->get();
                return $ris;
            } else {
                $ris = DB::table("indirizzi")
                    ->join("contatti", "indirizzi.idContattoInd", "=", "contatti.idContatto")
                    ->select(
                        "contatti.nome",
                        "contatti.cognome",
                        "contatti.email",
                        "contatti.citta",
                        "contatti.provincia",
                        // "contatti.nome",
                        "indirizzi.indirizzo",
                        "indirizzi.cap",
                        "indirizzi.civico",
                        "indirizzi.idComuneItaliano",
                        "indirizzi.idTipoIndirizzo"
                    )
                    ->where("indirizzi.idContattoInd", "=", $idContatto)
                    ->get();
                return $ris;
            }
        } else {
            abort(403, "Non sei autorizzato");
        }
    }

    /**
     * Get gli indirizzi degli utenti
     * @param \App\Models\Contatto $idContatto
     * @return JsonResource
     * 
     */
    public function contattiRecapiti($idContatto)
    {
        if (Gate::allows("leggere")) {
            if (Gate::allows("Amministratore")) {
                $ris = DB::table("recapiti")
                    ->join("contatti", "recapiti.idContattoRec", "=", "contatti.idContatto")
                    ->select(
                        "contatti.*",
                        "recapiti.*"
                    )
                    ->where("recapiti.idContattoRec", "=", $idContatto)
                    ->get();
                return $ris;
            } else {
                $ris = DB::table("recapiti")
                    ->join("contatti", "recapiti.idContattoRec", "=", "contatti.idContatto")
                    ->select(
                        "contatti.nome",
                        "contatti.cognome",
                        "contatti.email",
                        "recapiti.recapito",
                        "recapiti.idTipoRecapito"
                    )
                    ->where("recapiti.idContattoRec", "=", $idContatto)
                    ->get();
                return $ris;
            }
        } else {
            abort(403, "Non sei autorizzato");
        }
    }

}

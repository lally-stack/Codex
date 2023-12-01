<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Resources\CategorieCollection;
use App\Http\Resources\CategorieCompletoCollection;
use App\Models\Categorie;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategorieStoreRequest;
use App\Http\Requests\CategorieUpdateRequest;
use App\Http\Resources\CategorieCompletoResource;
use App\Http\Resources\CategorieResource;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class CategorieController extends Controller
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
                $categoria =  Categorie::all();
                return new CategorieCompletoCollection($categoria);
            } else {
                $categoria =  Categorie::all();
                return new CategorieCollection($categoria);
            }
        } else {
            abort(403, "Non sei abilitato");
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @param \App\Models\Categorie $idCategoria
     * @return JsonResource
     * 
     */
    public function filterFilm($idCategoria)
    {
        if (Gate::allows("leggere")) {
            if (Gate::allows("Amministratore")) {
                $ris = DB::table("films")
                    ->join("categorie", "films.idCategoriaFilm", "=", "categorie.idCategoria")
                    ->select(
                        "categorie.*",
                        "films.*"
                    )
                    ->where("films.idCategoriaFilm", "=", $idCategoria)
                    ->get();
                return $ris;
            } else {
                $ris = DB::table("films")
                    ->join("categorie", "films.idCategoriaFilm", "=", "categorie.idCategoria")
                    ->select(
                        "categorie.categoria",
                        "films.titolo",
                        "films.descrizione",
                        "films.durata",
                        "films.regista",
                        "films.attori",
                        "films.anno"
                    )
                    ->where("films.idCategoriaFilm", "=", $idCategoria)
                    ->get();
                return $ris;
            }
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @param \App\Models\Categorie $idCategoria
     * @return JsonResource
     * 
     */
    public function filterSerie($idCategoria)
    {
        if(Gate::allows("leggere")) {
            if(Gate::allows("Amministratore")) {
                $ris = DB::table("series_tv")
                ->join("categorie", "series_tv.idCategoriaSerie", "=", "categorie.idCategoria")
                ->select(
                    "series_tv.*",
                    "categorie.*"
                )
                ->where("series_tv.idCategoriaSerie", "=", $idCategoria)
                ->get();
            return $ris;
                

            } else {
                $ris = DB::table("series_tv")
                ->join("categorie", "series_tv.idCategoriaSerie", "=", "categorie.idCategoria")
                ->select(
                    "categorie.categoria",
                    "series_tv.titolo",
                    "series_tv.descrizione",
                    "series_tv.totStagioni",
                    "series_tv.numEpisodi",
                    "series_tv.regista",
                    "series_tv.attori",
                    "series_tv.annoInizio",
                    "series_tv.annoFine"
                )
                ->where("series_tv.idCategoriaSerie", "=", $idCategoria)
                ->get();
            return $ris;
            }
        } else {
            abort(403, "Non sei abilitato");
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CategorieStoreRequest $request
     * @return JsonResouce
     */
    public function store(CategorieStoreRequest $request)
    {
        if(Gate::allows("creare")) {
            if(Gate::allows("Amministratore")) {
                $data = $request->validated();
                $newCategory = Categorie::create($data);
                return new CategorieResource($newCategory);
            } else {
                abort(403, "Non sei un admin");
            }
        } else {
            abort(403, "Non sei un admin");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categorie  $idCategoria
     * @return JsonResource
     */
    public function show(Categorie $idCategoria)
    {
        if(Gate::allows("leggere")) {
            if(Gate::allows("Amministratore")) {
                $risorsa = new CategorieCompletoResource($idCategoria);
                return $risorsa;
            } else {
                $risorsa = new CategorieResource($idCategoria);
                return $risorsa;
            }
        } else {
            abort(403, "Non sei abilitato");
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  CategorieUpdateRequest  $request
     * @param  \App\Models\Categorie  $categorie
     * @return JsonResouce
     */
    public function update(CategorieUpdateRequest $request, Categorie $categoria, $idCategoria)
    {
        if(Gate::allows("aggiornare")) {
            if(Gate::allows("Amministratore")) {
                $categoria = Categorie::findOrFail($idCategoria);
                $data = $request->validated();
                $categoria->update($data);
                $categoria->save();
                return new CategorieResource($categoria);
            } else {
                abort(403, "Non puoi modificare la risorsa");
            }
        } else {
            abort(403, "Non sei autorizzato");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorie $categoria, $idCategoria)
    {
        if(Gate::allows("eliminare")) {
            if(Gate::allows("Amministratore")) {
                $categoria = Categorie::findOrFail($idCategoria);
                $categoria->deleteOrFail();
                return response()->noContent();
            } else {
                abort(403, "Non sei un admin");
            }
        } else {
            abort(403, "Non sei autorizzato");
        }

    }

}

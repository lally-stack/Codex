<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Film;
use App\Http\Controllers\Controller;
use App\Http\Requests\FilmStoreRequest;
use App\Http\Requests\FilmUpdateRequest;
use App\Http\Resources\FilmCollection;
use App\Http\Resources\FilmCompletoCollection;
use App\Http\Resources\FilmCompletoResource;
use App\Http\Resources\FilmResource;
use Illuminate\Support\Facades\Gate;


class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResouce
     */
    public function index()
    {
        if(Gate::allows("leggere")) {
            if(Gate::allows("Amministratore")) {
                $film = Film::all();
                return new FilmCompletoCollection($film);
            } else {
                $film = Film::all();
                return new FilmCollection($film);
            }
        } else {
            abort(403, "Non sei autorizzato");
        }

    }

  
    /**
     * Store a newly created resource in storage.
     *
     * @param  FilmStoreRequest $request
     * @return JsonResource
     */
    public function store(FilmStoreRequest $request)
    {
        if(Gate::allows("creare")) {
            if(Gate::allows("Amministratore")) {
                $data = $request->validated();
                $newFilm = Film::create($data);
                return new FilmResource($newFilm);
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
     * @param  \App\Models\Film  $idFilm
     * @return JsonResource
     */
    public function show(Film $idFilm)
    {
        if(Gate::allows("leggere")) {
            if(Gate::allows("Amministratore")) {
                $risorsa = new FilmCompletoResource($idFilm);
            } else {
                $risorsa = new FilmResource($idFilm);
            }
            return $risorsa;
        } else {
            abort(403, "Non sei autorizzato");
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  FilmUpdateRequest  $request
     * @param  \App\Models\Film  $film
     * @return JsonResource
     */
    public function update(FilmUpdateRequest $request, Film $film, $idFilm)
    {
        if(Gate::allows("aggiornare")) {
            if(Gate::allows("Amministratore")) {
                $film = Film::findOrFail($idFilm);
                $data = $request->validated();
                $film ->update($data);
                $film->save();
                return new FilmResource($film);
            } else {
                abort(403, "Vedremo di sistemare per l'utente");
            }
        } else {
            abort(403, "Non sei autorizzato");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function destroy(Film $film, $idFilm)
    {
        if(Gate::allows("eliminare")) {
            if(Gate::allows("Amministratore")) {
                $film = Film::findOrFail($idFilm);
                $film->deleteOrFail();
                return response()->noContent();
            } else {
                abort(403, "Non sei un admin");
            }
        } else {
            abort(403, "Azione non autorizzata");
        }
    }


}

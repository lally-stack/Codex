<?php

use App\Helpers\Utility\Utility as Ut;
use App\Http\Controllers\Api\v1\AccediController;
use App\Http\Controllers\Api\v1\FilmController;
use App\Http\Controllers\Api\v1\SerieTvController;
use App\Http\Controllers\Api\v1\EpisodiController;
use App\Http\Controllers\Api\v1\CategorieController;
use App\Http\Controllers\Api\v1\ContattiController;
use App\Http\Controllers\Api\v1\IndirizzoController;
use App\Http\Controllers\Api\v1\RecapitiController;
use App\Http\Controllers\Api\v1\RegistrazioneController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

if (!defined('_VERS')) {
    define('_VERS', 'v1');
}

// Rotte open
Route::post(_VERS . '/registrati', [RegistrazioneController::class, 'store']);
Route::get(_VERS . '/accedi/{utente}/{hash?}', [AccediController::class, 'show']);
Route::get(_VERS . '/testLogin', function () {

    // ADMIN
    // $hashUser = "4dfb2a43052d61abf30b58a9e77e5f439b42a01ae1f75dbd1d2f6a1bf4ea685d2ba82a7536a0734654c0a6587ca89a2b0f62a63a2fab0d1657ad3b900f3794fe";
    // $pwd      = "91340da5d78356cc2c4378b58722a5d779891f6818877fdfa6cac13c23ae9e473d6b53a2582aed039fc996f467a717445aba563cf94f5a5f6ac4a3c58be";
    // $salt     = "a0c299b71a9e59d5ebb07917e70601a3570aa103e99a7bb65a58e780ec9077b1902d1dedb31b1457beda595fe4d71d779b6ca9cad476266cc07590e31d84b206";

    // USER
        $hashUser = "d5495b12b9e9d1d44bb5cafd4a30906b426f04e5035e972d0d150327450d07bc5304eeeb3773cc091e99f1d2024606a00e6458df18e9d4adf682fe12f6fb0ec9";
        $pwd      = "718fc3d99550f56d05c0ededde8c400e6494966a3baa9d29664b4b98e58531f96584b1912d5911805e7d1e0476b611c3908cfb4b9c67309c3da3ec77fec44c6d";
        $salt     = "a0c299b71a9e59d5ebb07917e70601a3570aa103e99a7bb65a58e780ec9077b1902d1dedb31b1457beda595fe4d71d779b6ca9cad476266cc07590e31d84b206";

    $hashSalePsw = AccediController::hidePsw($pwd, $salt);
    AccediController::testLogin($hashUser, $hashSalePsw);
});


// Routes for admin and user
Route::middleware(['autenticazione', 'contattoRuolo:Amministratore,Utente'])->group(function () {
    // contatti
    Route::get(_VERS . "/contatti", [ContattiController::class, 'index']);
    Route::get(_VERS . "/contatti/{idContatto}", [ContattiController::class, 'show']);
    Route::put(_VERS . "/updateContatto/{idContatto}", [ContattiController::class, 'update']);
    Route::get(_VERS . "/contattiIndirizzo/{idContatto}", [ContattiController::class, 'contattiIndirizzi']);
    Route::get(_VERS . "/contattiRecapiti/{idContatto}", [ContattiController::class, 'contattiRecapiti']);
    // film
    Route::get(_VERS . "/film", [FilmController::class, 'index']);
    Route::get(_VERS . "/film/{idFilm}", [FilmController::class, 'show']);
    // serieTv
    Route::get(_VERS . "/serieTv", [SerieTvController::class, 'index']);
    Route::get(_VERS . "/serieTv/{idSerieTv}", [SerieTvController::class, 'show']);
    // episodi
    Route::get(_VERS . "/episodi/{idSerieTv}", [EpisodiController::class, 'indexSerie']); // tutti gli episodi di una serie
    Route::get(_VERS . "/episodi/{idSerieTv}/{numstagione}", [EpisodiController::class, 'indexStag']); // episodi filtrati tramite la stagione
    Route::get(_VERS . "/episodi/{idSerieTv}/{numstagione}/{numepisodio}", [EpisodiController::class, 'indexEpi']); // index dell'episodio
    // categorie
    Route::get(_VERS . "/categorie", [CategorieController::class, 'index']);
    Route::get(_VERS . "/categoriaFilm/{idCategoria}", [CategorieController::class, 'filterFilm']);
    Route::get(_VERS . "/categoriaSerie/{idCategoria}", [CategorieController::class, 'filterSerie']);
    Route::get(_VERS . "/categorie/{idCategoria}", [CategorieController::class, 'show']);
    // recapiti
    Route::get(_VERS . "/recapiti", [RecapitiController::class, 'index']);
    Route::get(_VERS . "/recapiti/{idRecapito}", [RecapitiController::class, 'show']);
    Route::get(_VERS . "/filterRecapiti/{idTipoRecapito}", [RecapitiController::class, 'tipoRecapito']);
    // indirizzi
    Route::get(_VERS . "/indirizzi", [IndirizzoController::class, 'index']);
    Route::get(_VERS . "/indirizzi/{idIndirizzo}", [IndirizzoController::class, 'show']);
    Route::get(_VERS . "/filterIndirizzi/{idTipoIndirizzo}", [IndirizzoController::class, 'tipoIndirizzo']);
});


// Routes ONLY for admin
Route::middleware(['autenticazione', 'contattoRuolo:Amministratore'])->group(function () {
    // contatti
    Route::post(_VERS . "/newContatto", [ContattiController::class, 'store']);
    Route::delete(_VERS . "/deleteContatti/{idContatto}", [ContattiController::class, 'destroy']);
    // film
    Route::post(_VERS . "/newFilm", [FilmController::class, 'store']);
    Route::put(_VERS . "/updateFilm/{idFilm}", [FilmController::class, 'update']);
    Route::delete(_VERS . "/deleteFilm/{idFilm}", [FilmController::class, 'destroy']);
    // serieTv
    Route::post(_VERS . "/newSerieTv", [SerieTvController::class, 'store']);
    Route::put(_VERS . "/updateSerie/{idSerieTv}", [SerieTvController::class, 'update']);
    Route::delete(_VERS . "/deleteSerieTv/{idSerieTv}", [SerieTvController::class, 'destroy']);
    // episodi
    Route::get(_VERS . "/episodi", [EpisodiController::class, 'index']);
    Route::post(_VERS . "/newEpisode", [EpisodiController::class, 'store']);
    Route::put(_VERS . "/updateEpisodio/{idEpisodio}", [EpisodiController::class, 'update']);
    Route::delete(_VERS . "/deleteEpisodio/{idEpisodio}", [EpisodiController::class, 'destroy']);
    // categorie
    Route::post(_VERS . "/newCategoria", [CategorieController::class, 'store']);
    Route::put(_VERS . "/updateCategoria/{idCategoria}", [CategorieController::class, 'update']);
    Route::delete(_VERS . "/deleteCategoria/{idCategoria}", [CategorieController::class, 'destroy']);
    // recapiti
    Route::post(_VERS . "/newRecapito", [RecapitiController::class, 'store']);
    Route::put(_VERS . "/updateRecapito/{idRecapito}", [RecapitiController::class, 'update']);
    Route::delete(_VERS . "/deleteRecapito/{idRecapito}", [RecapitiController::class, 'destroy']);
    // indirizzi
    Route::post(_VERS . "/newIndirizzo", [IndirizzoController::class, 'store']);
    Route::put(_VERS . "/updateIndirizzo/{idIndirizzo}", [IndirizzoController::class, 'update']);
    Route::delete(_VERS . "/deleteIndirizzo/{idIndirizzo}", [IndirizzoController::class, 'destroy']);
});



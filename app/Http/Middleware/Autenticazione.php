<?php

namespace App\Http\Middleware;

// use App\Http\Controllers\Api\v1\AccediController; 

use App\Helpers\Utility;
use App\Models\Contatto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Closure;

class Autenticazione
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // return $next($request);
        // When doing HTTP authentication this variable is set to the password provided by the user.
        $token = null;
        if (isset($_SERVER['HTTP_AUTHORIZATION']) && $_SERVER['HTTP_AUTHORIZATION'] !== null) {
            //non funziona su Apache ma su artisan serve si
            $token = $_SERVER['HTTP_AUTHORIZATION'];
            $token = trim(str_replace("Bearer", "", $token));
        } elseif (isset($_SERVER['PHP_AUTH_PW']) && $_SERVER['PHP_AUTH_PW'] !== null) {
            // Il codice sopra necessita di modifiche al server Apache
            // usare col server Apache
            $token = $_SERVER['PHP_AUTH_PW'];
        }
        // echo("TOKEN".$token);
        $payload = Utility::verifyToken($token);
        if($payload != null) {
            $contatto = Contatto::where("idContatto", $payload->data->idContatto)->firstOrFail();
            if ($contatto->idStato == 1) {
                Auth::login($contatto);
                $request["contattoRuolo"] = $contatto->ruoli->pluck('nome')->toArray();
                return $next($request); 
            } else {
                abort(403, "Stato dell'account non attivo");
            }
        } else {
            abort(403, "Token non valido");
        }
    }
}
 
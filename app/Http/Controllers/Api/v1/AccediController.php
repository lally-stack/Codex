<?php

namespace App\Http\Controllers\Api\v1;

use App\Helpers\Utility;
use App\Http\Controllers\Controller;
use App\Models\contattiAuth;
use App\Models\contattiPsw;
use App\Models\Configurazioni;
use App\Models\contattiAccessi;
use App\Models\contattiSessioni;


class AccediController extends Controller
{


    /**
     * Display the specified resource.
     *
     * @param  string $utente
     * @param  string $hash
     * @return \Illuminate\Http\Response
     */
    public function show($utente, $hash = null)
    {
        if ($hash == null) {
            return AccediController::checkUser($utente);
        } else {
            return AccediController::checkPsw($utente, $hash);
        }
    }


    /**
     * Controllo sulla psw 
     * 
     * @param string $utente
     * @param string $hash
     * @return
     */
    protected static function checkPsw($utente, $hash)
    {

        if (contattiAuth::validUserForLoginExists($utente)) {
            $auth = contattiAuth::where('user', $utente)->first();
            $secretJWT = $auth->secretJWT;
            $inizioSfida = $auth->inizioSfida;
            $idContatto = $auth->idContatto;

            $durataSfida = Configurazioni::getValue(2);
            $maxTentativi = Configurazioni::getValue(1);
            $scadenzaSfida = $inizioSfida + $durataSfida;

            if (time() < $scadenzaSfida) {
                $tentativi = contattiAccessi::countAttempts($idContatto);

                if ($tentativi < $maxTentativi - 1) {
                    $recordPsw = contattiPsw::password($idContatto);
                    $password = $recordPsw->psw;
                    $sale = $recordPsw->sale;
                    $hashedPswDB = AccediController::hidePsw($password, $sale);
                    
                    if ($hash == $hashedPswDB) {
                        $tk = Utility::createSessionToken($idContatto, $secretJWT);
                        contattiAccessi::resetAttempts($idContatto);
                        $accesso = contattiAccessi::addAccess($idContatto);

                        contattiSessioni::eliminateSession($idContatto);
                        contattiSessioni::updateSession($idContatto, $tk);

                        $dati = array("token" => $tk);
                        return $dati;
                    } else {
                        contattiAccessi::addLoginFailure($idContatto);
                        abort(403, "Login errato, ritenta");
                    }
                } else {
                    abort(403, "Tentativi di login esauriti");
                }
            } else {
                contattiAccessi::addLoginFailure($idContatto);
                abort(403, "Login errato, tempo scaduto, ritenta");
            }
        } else {
            abort(403, "L'utente non esiste, non hai accesso");
        }
    }


    // ----------------------------------------------------------------------------------------------------------
    /**
     * Crea il token per sviluppo
     *
     * @param string $utente
     * @return 
     */
    public static function testLogin($hashUtente, $hashPassword)
    {

        print_r(AccediController::checkPsw($hashUtente, $hashPassword));
    }

    /**
     * hash di sale e psw
     * 
     * @param string $psw
     * @param string $sale
     * 
     * @return string
     * 
     * OK
     */
    public static function hidePsw($psw, $sale)
    {
        return hash("sha512", $psw . $sale);
    }

        /**
     * Controllo sull'utente
     *
     * @param  string $utente
     * @return \Illuminate\Http\Response
     */
    protected static function checkUser($utente)
    {
        $sale = hash("sha512", trim("ciao"));

        if (contattiAuth::validUserForLoginExists($utente)) {
            $auth = contattiAuth::where('user', $utente)->first();

            $auth->secretJWT = hash("sha512", trim(Utility::strRan(200)));
            $auth->inizioSfida = time();
            $auth->save();

            $recordPsw = contattiPsw::password($auth->idContatto);
            $recordPsw->sale = $sale;
            $recordPsw->save();
        } else {
        }

        $dati = array("sale" => $sale);
        return $dati;
    }
}

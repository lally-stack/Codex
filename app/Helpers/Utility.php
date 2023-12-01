<?php

namespace App\Helpers;

use App\Models\Contatto;
use App\Models\ContattiRuoli_ContattiAbilita;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use App\Models\contattiSessioni;
use App\Models\contattiAuth;
use App\Models\Configurazioni;

/**
 * Questa classe contiene le funzioni da richiamare nel codice
 */
class Utility

{
    /**
     * Crea stringa random
     * @param integer $lunghezza
     * 
     * @return string
     * 
     * OK
     */
    public static function strRan($lunghezza)
    {
        $caratteri = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $stringaRandom = '';
        for ($i = 0; $i < $lunghezza; $i++) {
            $stringaRandom .= $caratteri[rand(0, strlen($caratteri) - 1)];
        }
        return $stringaRandom;
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
        return hash("sha512", $sale . $psw);
    }

    /**
     * crea token
     * 
     * @param string $secretJWT
     * @param integer $idContatto
     * @param integer $usaDa
     * @param integer $scade
     * 
     * @return string
     * 
     */
    public static function createSessionToken($idContatto, $secretJWT, $usaDa = null, $scade = null)
    {
        $maxTime = 15 * 24 * 60 * 60; //15gg
        $recordContatto = Contatto::where("idContatto", $idContatto)->first();
        $t = time();
        $nbf = ($usaDa == null) ? $t : $usaDa;
        $exp = ($scade == null) ? $nbf + $maxTime : $scade;

        $ruolo = $recordContatto->ruoli[0];

        $idRuolo = $ruolo->idContattoRuolo;

        $abilita = ContattiRuoli_ContattiAbilita::getSkills($idRuolo);

        $skills = json_decode(json_encode($abilita), true);

        $idAbilita = array_map(function ($skills) {
            return $skills["idContattoAbilita"];
        }, $skills);

        $arr = array(
            "iss" => 'https://www.codex.it',
            "aud" => null,
            "iat" => $t,
            "nbf" => $nbf,
            "exp" => $exp,
            "data" => array(
                "idContatto" => $idContatto,
                "idStato" => $recordContatto->idStato,
                "idContattoRuolo" => $idRuolo,
                "abilita" => $idAbilita,
                "nome" => trim($recordContatto->nome . " " . $recordContatto->cognome)
            )
        );
        $token = JWT::encode($arr, $secretJWT, 'HS256');
        return $token;
    }

    /**
     * Verifica il token 
     * 
     * @param string $token 
     * @return object
     */
    public static function verifyToken($token)
    {
        $rit = null;
        $session = contattiSessioni::dataSession($token);

        if ($session != null) {
            $startSession = $session->scadenzaSessione;
            $durataSessione = Configurazioni::getValue(3);
            $scadenza = $startSession + $durataSessione;

            if (time() < $scadenza) {
                $auth = contattiAuth::where("idContatto", $session->idContatto)->first();

                if ($auth != null) {
                    $secretJWT = $auth->secretJWT;
                    $payload = Utility::validateToken($secretJWT, $token, $session);

                    if ($payload != null) {
                        $rit = $payload;

                    } else {
                        abort(403);
                    }
                } else {
                    abort(403, "Il contatto non è stato trovato");
                }
            } else {
                abort(403, "La tua sessione è scaduta");
            }
        } else {
            abort(403, "Non sei abilitato");
        }
        return $rit;
    }


    /**
     * Valida il token 
     * 
     * @param string $token
     * @pa
     * 
     * @return object
     */
    public static function validateToken($secretJWT, $token, $session)
    {
        $rit = null;
        $payload = JWT::decode($token, new Key($secretJWT, 'HS256'));
        if ($payload->iat <= $session->scadenzaSessione) {
            if ($payload->data->idContatto == $session->idContatto) {
                $rit = $payload;
            }
        }
        return $rit;
    }


}

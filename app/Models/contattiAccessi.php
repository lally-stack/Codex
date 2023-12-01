<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class contattiAccessi extends Model
{
    use HasFactory;
    protected $table = 'contatti_accessi';
    protected $primaryKey = 'id';
    protected $fillable = [
        'idContatto',
        'autenticato',
        'ip'
    ];

    public function contatto()
    {
        return $this->hasOne(Contatto::class, 'idContatto', 'idContatto');
    }

    /**
     * Conta tentativi per il login
     * 
     * @param int $idContatto
     */
    public static function countAttempts($idContatto)
    {
        $tmp = contattiAccessi::where("idContatto", $idContatto)->where("autenticato", 0)->count();
        return $tmp;
    }

    /**
     * Aggiunge un tentativo fallito
     * 
     * @param int $idContatto
     * @return integer
     */
    public static function addLoginFailure($idContatto)
    {
        return contattiAccessi::newAttempt($idContatto, 0);
    }



    /**
     * Conta quanti tentativi per il login sono stati effettuati
     * 
     * @param string $idContatto
     * @param boolean $autenticato
     * 
     * @return App\Models\contattiAccessi
     */
    protected static function newAttempt($idContatto, $autenticato)
    {
        $tmp = contattiAccessi::create([
            "idContatto" => $idContatto,
            "autenticato" => $autenticato,
            "ip" => request()->ip()
        ]);
        return $tmp;
    }

    /**
     * Reset dei tentativi
     * 
     * @param int $idContatto
     * @param boolean $autenticato
     * 
     * @return // if ok returns null
     */
    protected static function resetAttempts($idContatto, $autenticato = 0)
    {
        DB::table("contatti_accessi")
        ->where("autenticato", "=", $autenticato)
        ->where("idContatto", "=", $idContatto)
        ->delete();
        // $tmp = contattiAccessi::create([
        //     "idContatto" => $idContatto,
        //     "autenticato" => $autenticato,
        //     "ip" => request()->ip()
        // ]);
        // return $tmp;
    }

    /**
     * Aggiunge l'accesso
     * 
     * @param int $idContatto
     * @param boolean $autenticato
     * 
     * @return App\Models\contattiAccessi
     */
    protected static function addAccess($idContatto, $autenticato = 1)
    {
        $tmp = contattiAccessi::create([
            "idContatto" => $idContatto,
            "autenticato" => $autenticato,
            "ip" => request()->ip()
        ]);
        return $tmp;
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class contattiSessioni extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'contatti_sessioni';
    protected $primaryKey = 'idSessione';
    protected $fillable = [
        'token',
        'scadenzaSessione',
        'created_at'
    ];

    public function contatto() {
        return $this->hasOne(Contatto::class, 'idContatto', 'idContatto');
    }

    public static function eliminateSession($idContatto) {
        DB::table("contatti_sessioni")->where("idContatto", $idContatto)->delete();
    }

    /**
     * Aggiona la sessione relativa all'idContatto
     * 
     * @param integer $idContatto
     * @param string $token
     * 
     * @return boolean true 
     */
    public static function updateSession($idContatto, $tk) {
        $where = ["idContatto" => $idContatto, "token" => $tk];
        $arr = ["scadenzaSessione" => time()];
        DB::table("contatti_sessioni")->updateOrInsert($where, $arr);
    }

    /**
     * Recupera i dati della sessione
     * 
     * @param string $token
     * @return App\Models\contattiSessioni
     */
    public static function dataSession($token) {
        if (contattiSessioni::sessionExists($token)) {
            return contattiSessioni::where("token", $token)->get()->first();
        } else {
            return null;
        }
    }

    /**
     * Esiste la sessione con il token passato
     * @param string $token
     * @return boolean
     */
    public static function sessionExists($token) {
        return DB::table("contatti_sessioni")->where("token", $token)->exists();
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class contattiAuth extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'contatti_auth';
    protected $primaryKey = 'idAuth';
    protected $fillable = [
        'user',
        'sfida',
        'secretJWT',
        'inizioSfida'
    ];

    public function contatto() {
        return $this->hasOne(Contatto::class, 'idContatto', 'idContatto');
    }

    /**
     * Controlla se esiste un utente valido per il login
     * 
     * @param string $utente
     * @return boolean
     * 
     */
    public static function validUserForLoginExists($utente) {
        $tmp = DB::table('contatti')->join('contatti_auth', 'contatti.idContatto', '=', 'contatti_auth.idContatto')
        ->where('contatti.idStato', '=', 1)
        ->where('contatti_auth.user', '=', $utente)
        ->select('contatti_auth.idContatto')->get()->count();

        return ($tmp > 0) ? true : false;
    }


}

<?php

namespace App\Models;

use App\Http\Middleware\ContattoRuolo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ContattiAbilita;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContattiRuoli extends Model
{
    use HasFactory;

    protected $table = 'contatti_ruoli';
    protected $primaryKey = 'idContattoRuolo';
    protected $fillable = [
        'nome'
    ];

    public function abilita() {
        return $this->belongsToMany(ContattiAbilita::class, 'contatti_ruoli_contatti_abilita', 'idContattoRuolo', 'idContattoAbilita');
    }

    // public static function aggiungiRuoloAbilita($idRuolo, $idAbilita) {
    //     $ruolo = ContattiRuoli::where("idContattoRuolo", $idRuolo)->firstOrFail();
    //     if (is_string($idAbilita)) {
    //         $tmp = explode(',', $idAbilita);
    //     } else {
    //         $tmp = $idAbilita;
    //     }
    //     $ruolo->abilita()->attach($tmp);
    //     return $ruolo->abilita;
    // }
}

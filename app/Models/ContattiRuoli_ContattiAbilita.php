<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ContattiRuoli_ContattiAbilita extends Model
{
    use HasFactory;
    protected $table = 'contatti_ruoli_contatti_abilita';
    protected $primaryKey = 'id';

    public function contattiAbilita()
    {
        return $this->hasMany(ContattiAbilita::class, 'idContattoAbilita', 'idContattoAbilita');
    }

    public function contattiRuoli()
    {
        return $this->hasMany(ContattiRuoli::class, 'idContattoRuolo', 'idContattoRuolo');
    }

    /**
     * Estrae le skills
     * @param integer $idRuolo
     * @return array
     */
    public static function getSkills($idRuolo)
    {
        $tmp = DB::table('contatti_ruoli_contatti_abilita')
            ->join('contatti_abilita', 'contatti_ruoli_contatti_abilita.idContattoAbilita', '=', 'contatti_abilita.idContattoAbilita')

            ->select(
                'contatti_ruoli_contatti_abilita.idContattoAbilita',
                //  'contatti_ruoli_contatti_abilita.idContattoRuolo',
                // 'contatti_abilita.idContattoAbilita',
                // 'contatti_abilita.skill'
            )
            ->where("contatti_ruoli_contatti_abilita.idContattoRuolo", '=', $idRuolo)
            ->get();
        // ->select('contatti_abilita');
        // ->where("idContattoRuolo", $idRuolo);

        return $tmp;
    }
}

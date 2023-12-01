<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContattiAbilita extends Model
{
    use HasFactory;

    protected $table = 'contatti_abilita';
    protected $primaryKey = 'idContattoAbilita';
    protected $fillable = [
        'nome',
        'skill'
    ];

    public function abilita() {
        return $this->belongsToMany(ContattiRuoli::class, 'contatti_ruoli_contatti_abilita', 'idContattoRuolo', 'idContattoAbilita');
    }
}

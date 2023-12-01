<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contatti_ContattiRuoli extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'contatti__contatti_ruoli';
    protected $primaryKey = 'id';

    public function contatto() {
        return $this->hasOne(Contatto::class, 'idContatto', 'idContatto');
    }
    public function ruoli() {
        return $this->hasOne(ContattiRuoli::class, 'idContattoRuolo', 'idContattoRuolo');
    }

    public function contattiAbilita() {
        return $this->hasMany(ContattiAbilita::class, 'idContattoAbilita', 'idContattoAbilita');
    }
}

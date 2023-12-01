<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as ClassGate;

class Contatto extends ClassGate
{
    use HasFactory, SoftDeletes;
    protected $table = "contatti";
    protected $primaryKey = "idContatto";
    protected $fillable = [
        "idContatto",
        "idIndirizzo",
        "idRecapito",
        "idNazione",
        "nome",
        "cognome",
        "email",
        "sesso",
        "citta",
        "provincia",
        "dataDiNascita",
        "idStato"
    ];

    public function idIndirizzo() {
        return $this->hasMany(Indirizzo::class, 'idIndirizzo', 'idIndirizzo');
    }

    public function idRecapito() {
        return $this->hasMany(Recapiti::class, 'idRecapito', 'idRecapito');
    }

    public function idStato() {
        return $this->hasOne(contattiStati::class, 'idStato', 'idStato');
    }

    public function idNazione() {
        return $this->hasOne(Nazione::class, 'idNazione', 'idNazione');
    }

    public function ruoli() {
        return $this->belongsToMany(ContattiRuoli::class, 'contatti__contatti_ruoli', 'idContatto', 'idContattoRuolo');
    }


    
}

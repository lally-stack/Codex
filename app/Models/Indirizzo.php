<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Indirizzo extends Model
{
    use HasFactory ,SoftDeletes;
    protected $table = 'indirizzi';
    protected $primaryKey = 'idIndirizzo';
    protected $fillable = [
        'idTipoIndirizzo',
        'idContattoInd',
        'idNazioneInd',
        'idComuneItaliano',
        'cap',
        'indirizzo',
        'civico',
        "deleted_at"
    ];

    public function address() {
        return $this->hasOne(TipoIndirizzi::class, 'idTipoIndirizzo', 'idTipoIndirizzo');
    }

    public function user() {
        return $this->hasOne(Contatto::class, 'idContatto', 'idContattoInd');
    }

    public function nation() {
        return $this->hasOne(Nazione::class, 'idNazione', 'idNazioneInd');
    }

    public function comune() {
        return $this->hasOne(ComuniItaliani::class, 'idComeune', 'idComuneItaliano');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Recapiti extends Model
{
    use HasFactory , SoftDeletes;
    protected $table = 'recapiti';
    protected $primaryKey = 'idRecapito'; 
    
    protected $fillable = [
        // 'idRecapito',
        'idContattoRec',
        'idTipoRecapito',
        'recapito'
    ];

    public function contatto() {
        return $this->hasOne(Contatto::class, 'idContatto', 'idContattoRec');
    }

    public function tipo() {
        return $this->hasOne(TipoRecapiti::class, 'idTipoRecapito', 'idTipoRecapito');
    }
}

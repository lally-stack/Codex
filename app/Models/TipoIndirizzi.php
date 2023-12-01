<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoIndirizzi extends Model
{
    use HasFactory;
    protected $table = 'tipoIndirizzi';
    protected $primaryKey = 'idTipoIndirizzo';
    protected $fillable = [
        'indirizzo'
    ];
}

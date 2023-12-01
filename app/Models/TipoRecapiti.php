<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoRecapiti extends Model
{
    use HasFactory;
    protected $table = 'tipoRecapiti';
    protected $primaryKey = 'idTipoRecapito';
    protected $fillable = [
        'recapito'
    ];
}

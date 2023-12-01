<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComuniItaliani extends Model
{
    use HasFactory;

    protected $table = 'comuni_italiani';
    protected $primaryKey = 'idComune';
    protected $fillable = [
        'nome',
        'regione',
        'provincia',
        'cittaMetropolitana',
        'siglaProvincia',
        'codiceComune',
        'col8',
        'col9',
        'cap',
        'col11',
        'col12',
    ];
}

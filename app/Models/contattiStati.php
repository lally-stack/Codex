<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contattiStati extends Model
{
    use HasFactory;
    protected $table = 'contatti_stati';
    protected $primaryKey = 'idStato';
    protected $fillable = [
        'nome'
    ];
}

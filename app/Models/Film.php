<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Http\Controllers\Api\v1\FilmController;

class Film extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'films';
    protected $primaryKey = 'idFilm';

    protected $fillable = [
        'idFilm',
        'idCategoriaFilm',
        'titolo',
        'descrizione',
        'durata',
        'regista',
        'attori',
        'anno'
    ];

    public function categoria(){
        return $this->hasOne(Categorie::class, 'idCategoria', 'idCategoriaFilm');
    }
}

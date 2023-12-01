<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categorie extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'categorie';
    protected $primaryKey = 'idCategoria';

    protected $fillable = [
        'idCategoria',
        'categoria'
    ];

    public function hasFilm() {
        return $this->hasMany(Film::class, "idCategoriaFilm", "idCategoria");
    }
    public function hasSerie() {
        return $this->hasMany(SerieTv::class, "idCategoriaSerie", "idCategoria");
    }
}

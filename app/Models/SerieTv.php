<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SerieTv extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'series_tv';
    protected $primaryKey = 'idSerieTv';

    protected $fillable = [
        'idSerieTv',
        "idCategoriaSerie",
        "titolo",
        "descrizione",
        "totStagioni",
        "numEpisodi",
        "regista",
        "attori",
        "annoInizio",
        "annoFine"
    ];

    public function categorie() {
        return $this->hasOne(Categorie::class, 'idCategoria', 'idCategoriaSerie');
    }
}

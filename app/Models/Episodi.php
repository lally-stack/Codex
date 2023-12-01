<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Episodi extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'episodi';
    protected $primaryKey = 'idEpisodio';
    protected $fillable = [
        'idSerieTv',
        'titolo',
        'descrizione',
        'numStagione',
        'numEpisodio',
        'durata'
    ];

    public function serieTv() {
        return $this->hasOne(SerieTv::class, 'idSerieTv', 'idSerieTv');
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Configurazioni extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'configurazioni';
    protected $primaryKey = 'idConfigurazione';
    protected $fillable = [
        'chiave',
        'valore'
    ];

    /**
     * Estrae i valori delle configurazioni
     * 
     * @param int $idConfigurazione
     * 
     * @return int
     */
    public static function getValue($idConfigurazione) {
        // return DB::table("configurazioni")->where("valore", $data)->get();
        // $tmp = DB::where("idConfigurazione", $idConfigurazione)->value("valore");
        // var_dump($tmp);
        // return $tmp;

        $tmp = DB::table('configurazioni')
        ->where("idConfigurazione", $idConfigurazione)
        ->value("valore");
        return $tmp;
    }
}

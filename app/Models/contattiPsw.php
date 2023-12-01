<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class contattiPsw extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'contatti_psw';
    protected $primaryKey = 'idPassword';
    protected $fillable = [
        'psw',
        'sale'
    ];

    public function contatto() {
        return $this->hasOne(Contatto::class, 'idContatto', 'idContatto');
    }

    /**
     * Ritorna il record della psw salvata nel db
     * 
     * @param integer $idContatto
     * @retrun 
     * 
     */
    public static function password($idContatto) {
        $record = contattiPsw::where("idContatto", $idContatto)->orderBy("idContatto", "desc")->firstOrFail();
        return $record;
    }
}

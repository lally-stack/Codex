<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Indirizzo;

class IndirizzoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Indirizzo::create(
        //     [
        //         "idTipoIndirizzo" => 1,
        //         "idContattoInd" => 1,
        //         "idNazioneInd" => 1,
        //         "idComuneItaliano" => 7922,
        //         "cap" => "09059",
        //         "indirizzo" => "Vico V Corso Italia", 
        //         "civico" => 8
        //     ]
        // );
        //
        Indirizzo::create(
            [
                "idTipoIndirizzo" => 2,
                // "idContattoInd" => 2,
                "idNazioneInd" => 1,
                "idComuneItaliano" => 7772,
                "cap" => "nonloso",
                "indirizzo" => "Corso Vittorio", 
                "civico" => 16
            ]
        );
        //
        Indirizzo::create(
            [
                "idTipoIndirizzo" => 3,
                // "idContattoInd" => 3,
                "idNazioneInd" => 1,
                "idComuneItaliano" => 7825,
                "cap" => "nonloso",
                "indirizzo" => "Via Mare", 
                "civico" => 245
            ]
        );
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contatto;

class ContattiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Contatto::create(
        //     [
        //         "idContatto" => 1,
        //         "idIndirizzo" => 1,
        //         "idRecapito" => 1,
                // nb: ci sono 2 recapiti assegnati all'utente 1 ma
                // non so come collegarne più di 1 
        //         "idNazione" => 1,
        //         "nome" => "Laura",
        //         "cognome" => "Carrus",
        //         "email" => "lallymail@mail.com",
        //         "sesso" => 1,
        //         "citta" => "Nurri",
        //         "provincia" => "SU",
        //         "dataDiNascita" => "14/12/2000",
        //         "idStato" => 1
        //     ],
        // );
        // Contatto::create(
        //     [
        //         "idContatto" => 2,
        //         "idIndirizzo" => 2,
        //         "idRecapito" => 13,
                // nb: ci sono 2 recapiti assegnati all'utente 1 ma
                // non so come collegarne più di 1 
        //         "idNazione" => 1,
        //         "nome" => "Ciospo",
        //         "cognome" => "Rospo",
        //         "email" => "ciosporospo@mail.com",
        //         "sesso" => 0,
        //         "citta" => "Cagliari",
        //         "provincia" => "SU",
        //         "dataDiNascita" => "23/01/1980",
        //         "idStato" => 1
        //     ],
        // );
        Contatto::create(
            [
                "idContatto" => 3,
                "idIndirizzo" => 3,
                "idRecapito" => 14,
                // nb: ci sono 2 recapiti assegnati all'utente 1 ma
                // non so come collegarne più di 1 
                "idNazione" => 1,
                "nome" => "Carmen",
                "cognome" => "Macchina",
                "email" => "carmenmacchina@mail.com",
                "sesso" => 1,
                "citta" => "Oristano",
                "provincia" => "OR",
                "dataDiNascita" => "02/07/2004",
                "idStato" => 4
            ],
        );
    }
}

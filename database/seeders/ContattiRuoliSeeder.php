<?php

namespace Database\Seeders;

use App\Models\ContattiRuoli;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContattiRuoliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ContattiRuoli::create(
            [
                "idContattoRuolo" => 1,
                "nome" => 'Amministratore'
            ],
        );
        ContattiRuoli::create(
            [
                "idContattoRuolo" => 2,
                "nome" => 'Utente'
            ],
        );
        ContattiRuoli::create(
            [
                "idContattoRuolo" => 3,
                "nome" => 'Ospite'
            ],
        );

    }
}

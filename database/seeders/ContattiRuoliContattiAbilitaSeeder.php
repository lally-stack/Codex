<?php

namespace Database\Seeders;

use App\Models\ContattiRuoli_ContattiAbilia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ContattiRuoli_ContattiAbilita;

class ContattiRuoliContattiAbilitaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ContattiRuoli_ContattiAbilita::create(
            [
                // lettura admin
                'idContattoAbilita' => 1,
                'idContattoRuolo' => 1
            ]
        );
        ContattiRuoli_ContattiAbilita::create(
            [
                // lettura utente
                'idContattoAbilita' => 1,
                'idContattoRuolo' => 2
            ]
        );
        ContattiRuoli_ContattiAbilita::create(
            [
                // creare admin
                'idContattoAbilita' => 2,
                'idContattoRuolo' => 1
            ]
        );
        ContattiRuoli_ContattiAbilita::create(
            [
                // aggiornare admin
                'idContattoAbilita' => 3,
                'idContattoRuolo' => 1
            ]
        );
        ContattiRuoli_ContattiAbilita::create(
            [
                // eliminare admin
                'idContattoAbilita' => 4,
                'idContattoRuolo' => 1
            ]
        );
    }
}

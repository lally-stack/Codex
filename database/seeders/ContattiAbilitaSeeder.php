<?php

namespace Database\Seeders;

use App\Models\ContattiAbilita;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContattiAbilitaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ContattiAbilita::create(
            [
                "idContattoAbilita" => 1,
                "nome" => "Leggere",
                "skill" => "leggere"
            ],
        );
        ContattiAbilita::create(
            [
                "idContattoAbilita" => 2,
                "nome" => "Creare",
                "skill" => "creare"
            ],
        );

        ContattiAbilita::create(
            [
                "idContattoAbilita" => 3,
                "nome" => "Aggiornare",
                "skill" => "aggiornare"
            ],
        );
        ContattiAbilita::create(
            [
                "idContattoAbilita" => 4,
                "nome" => "Eliminare",
                "skill" => "eliminare"
            ],
        );
    }
}

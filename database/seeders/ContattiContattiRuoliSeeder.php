<?php

namespace Database\Seeders;

use App\Models\Contatti_ContattiRuoli;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContattiContattiRuoliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Contatti_ContattiRuoli::create(
        //     [
        //         "idContatto" => 1,
        //         "idContattoRuolo" => 1
        //     ]
        // );
        Contatti_ContattiRuoli::create(
            [
                "idContatto" => 2,
                "idContattoRuolo" => 2
            ]
        );
        Contatti_ContattiRuoli::create(
            [
                "idContatto" => 3,
                "idContattoRuolo" => 3
            ]
        );
    }
}

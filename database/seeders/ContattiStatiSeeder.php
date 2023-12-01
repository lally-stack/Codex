<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\contattiStati;

class ContattiStatiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        contattiStati::create(["idStato" => 1, "nome" => "Attivo"]);
        contattiStati::create(["idStato" => 2, "nome" => "In attesa"]);
        contattiStati::create(["idStato" => 3, "nome" => "Bannato"]);
        contattiStati::create(["idStato" => 4, "nome" => "Non attivo"]);
    }
}

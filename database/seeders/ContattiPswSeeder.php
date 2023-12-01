<?php

namespace Database\Seeders;

use App\Models\contattiPsw;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContattiPswSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        contattiPsw::create(
            [
                "idContatto" => 1,
                "psw" => hash("sha512", trim("Password")),
                "sale" => hash("sha512", trim("Sale"))
            ]
        );
    }
}

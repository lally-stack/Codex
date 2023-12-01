<?php

namespace Database\Seeders;

use App\Models\contattiAuth;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContattiAuthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        contattiAuth::create(
            [
                "idContatto" => 1,
                "user" => hash("sha512", trim("Utente")),
                "sfida" => hash("sha512", trim("Sfida")),
                "secretJWT" => hash("sha512", trim("Secret")),
                "inizioSfida" => time()
            ]
        );
    }
}

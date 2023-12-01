<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categorie;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // cartoni 1
        // horror
        // azione
        // commedie
        // romantico

        Categorie::create(
            [
                "idCategoria" => 1,
                "categoria" => 'cartoni'
            ],
        );
        Categorie::create(
            [
                "idCategoria" => 2,
                "categoria" => 'horror'
            ],
        );
        Categorie::create(
            [
                "idCategoria" => 3,
                "categoria" => 'azione'
            ],
        );
        Categorie::create(
            [
                "idCategoria" => 4,
                "categoria" => 'commedie'
            ],
        );
        Categorie::create(
            [
                "idCategoria" => 5,
                "categoria" => 'romantico'
            ],
        );
    }
}

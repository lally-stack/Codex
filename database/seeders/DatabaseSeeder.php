<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

// use App\Models\ComuniItaliani;

use App\Models\ContattiAbilita;
use App\Models\ContattiRuoli;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(
            [
                // NazioneSeeder::class,
                // ComuniItalianiSeeder::class,
                // CategorieSeeder::class,
                // FilmSeeder::class  
                // SerieTvSeeder::class,
                // EpisodiSeeder::class
                // ContattiRuoliSeeder::class
                // ContattiAbilitaSeeder::class
                // ContattiRuoliContattiAbilitaSeeder::class
                // ContattiStatiSeeder::class,
                // ContattiSeeder::class,
                // RecapitiSeeder::class,
                // IndirizzoSeeder::class
                // ContattiContattiRuoliSeeder::class
                ContattiPswSeeder::class,
                ContattiAuthSeeder::class,
                
            ]
        );
    }

}

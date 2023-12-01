<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Film;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Film::create(
            [
                "idCategoriaFilm" => 1,
                "titolo" => 'la sirenetta',
                "descrizione" => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
                "durata" => '90 min',
                "regista" =>'disney' ,
                "attori" => 'ariel', 
                "anno" => '1967'
            ],
        );
        Film::create(
            [
                "idCategoriaFilm" => 1 ,
                "titolo" => 'shrek' ,
                "descrizione"  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
                "durata" => '95 min',
                "regista" =>'pixar' ,
                "attori" => '',
                "anno" => '2002'
            ],
        );
        Film::create(
            [
                "idCategoriaFilm" => 2,
                "titolo" => 'insidious',
                "descrizione" =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum' ,
                "durata" => '130',
                "regista" => 'ascirissu' ,
                "attori" => 'i mostri' ,
                "anno"  => '2017'
            ],
        );
        Film::create(
            [
                "idCategoriaFilm" => 2 ,
                "titolo" => 'the conjuring',
                "descrizione" => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
                "durata" => '120 min',
                "regista" => 'la suora',
                "attori" => 'bambini',
                "anno" => '2014'
            ],
        );
        Film::create(
            [
                "idCategoriaFilm" => 3,
                "titolo" => 'fast & furious',
                "descrizione" => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum' ,
                "durata" => '500 min',
                "regista" => 'vin benzina',
                "attori" => 'mario gasiolio',
                "anno" => '2006'
            ],
        );
        Film::create(
            [
                "idCategoriaFilm" => 3,
                "titolo" => 'Jurassic park',
                "descrizione" => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
                "durata" => '200 min',
                "regista" => 'the rock',
                "attori" => 'i dinosauri',
                "anno"  => '1999'
            ],
        );
        Film::create(
            [
                "idCategoriaFilm" => 4,
                "titolo" => 'tre uomini e una gamba',
                "descrizione" => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
                "durata" => '75 min',
                "regista" => 'giacomino',
                "attori" => 'aldo e giovanni',
                "anno" => '1998'
            ],
        );
        Film::create(
            [
                "idCategoriaFilm" => 4,
                "titolo" => 'natale a new york',
                "descrizione" => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
                "durata" => '300 min',
                "regista" => 'babbo natale',
                "attori" => 'de sica',
                "anno" => '2011'
            ],
        );
        Film::create(
            [
                "idCategoriaFilm" => 5,
                "titolo" =>'le pagine della nostra vita',
                "descrizione" => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
                "durata" => '130 min',
                "regista" => 'ryan cosoli',
                "attori" => 'amore' ,
                "anno" => '2016'
            ],
        );
        Film::create(
            [
                "idCategoriaFilm" => 5,
                "titolo" => 'tutte le volte che ho scritto ti amo',
                "descrizione" => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
                "durata" => '80 min',
                "regista" => 'carlo',
                "attori" => 'carla',
                "anno" => '2018'
            ],
        );
        
    }
}

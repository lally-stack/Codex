<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SerieTv;

class SerieTvSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SerieTv::create(
            [
                "idCategoriaSerie" => 1,
                "titolo" => 'topolino',
                "descrizione" => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."',
                "totStagioni" => 2,
                "numEpisodi" => 10,
                "regista" => 'topolino',
                "attori" => 'paperino',
                "annoInizio" => '1999',
                "annoFine" => '2020'
            ],
        );
        SerieTv::create(
            [
                "idCategoriaSerie" => 2,
                "titolo" => 'american horror story',
                "descrizione" => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."',
                "totStagioni" => 3,
                "numEpisodi" => 15,
                "regista" => 'horror',
                "attori" => 'story',
                "annoInizio" => '2016',
                "annoFine" => '2021'
            ],
        );
        SerieTv::create(
            [
                "idCategoriaSerie" => 3,
                "titolo" => 'NCIS',
                "descrizione" => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."',
                "totStagioni" => 1,
                "numEpisodi" => 10,
                "regista" => 'polizia',
                "attori" => 'carabinieri',
                "annoInizio" => '2012',
                "annoFine" => '2019'
            ],
        );
        SerieTv::create(
            [
                "idCategoriaSerie" => 4,
                "titolo" => 'i delitti del bar lume',
                "descrizione" => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."',
                "totStagioni" => 2,
                "numEpisodi" => 12,
                "regista" => 'assassini',
                "attori" => 'persone',
                "annoInizio" => '2020',
                "annoFine" => ''
            ],
        );
        SerieTv::create(
            [
                "idCategoriaSerie" => 5,
                "titolo" => 'Romanticismo',
                "descrizione" => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."',
                "totStagioni" => 3,
                "numEpisodi" => 15,
                "regista" => 'lovers',
                "attori" => 'amanti',
                "annoInizio" => '1999',
                "annoFine" => '2010'
            ],
        );
    }
}

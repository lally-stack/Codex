<?php

namespace Database\Seeders;

use App\Models\Episodi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EpisodiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // PRIMA STAGIONE 1
        Episodi::create(
            [
                "idSerieTv" => 1,
                "titolo" => 'Franco',
                "descrizione" => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                "numStagione" => 1,
                "numEpisodio" => 1,
                "durata" => '50 min'
            ],
        );
        Episodi::create(
            [
                "idSerieTv" => 1,
                "titolo" => 'Mario',
                "descrizione" => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                "numStagione" => 1,
                "numEpisodio" => 2,
                "durata" => '50 min'
            ],
        );
        Episodi::create(
            [
                "idSerieTv" => 1,
                "titolo" => 'Carlo',
                "descrizione" => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                "numStagione" => 1,
                "numEpisodio" => 3,
                "durata" => '50 min'
            ],
        );
        Episodi::create(
            [
                "idSerieTv" => 1,
                "titolo" => 'Fabrizio',
                "descrizione" => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                "numStagione" => 1,
                "numEpisodio" => 4,
                "durata" => '50 min'
            ],
        );
        Episodi::create(
            [
                "idSerieTv" => 1,
                "titolo" => 'Mariano',
                "descrizione" => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                "numStagione" => 1,
                "numEpisodio" => 5,
                "durata" => '50 min'
            ],
        );

        // SECONDA STAGIONE 1
        Episodi::create(
            [
                "idSerieTv" => 1,
                "titolo" => 'Sara',
                "descrizione" => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                "numStagione" => 2,
                "numEpisodio" => 1,
                "durata" => '45 min'
            ],
        );
        Episodi::create(
            [
                "idSerieTv" => 1,
                "titolo" => 'Marta',
                "descrizione" => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                "numStagione" => 2,
                "numEpisodio" => 2,
                "durata" => '45 min'
            ],
        );
        Episodi::create(
            [
                "idSerieTv" => 1,
                "titolo" => 'Sofia',
                "descrizione" => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                "numStagione" => 2,
                "numEpisodio" => 3,
                "durata" => '45 min'
            ],
        );
        Episodi::create(
            [
                "idSerieTv" => 1,
                "titolo" => 'Noemi',
                "descrizione" => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                "numStagione" => 2,
                "numEpisodio" => 4,
                "durata" => '45 min'
            ],
        );
        Episodi::create(
            [
                "idSerieTv" => 1,
                "titolo" => 'Roberta',
                "descrizione" => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                "numStagione" => 2,
                "numEpisodio" => 5,
                "durata" => '45 min'
            ],
        );

        //----------------------------------------------------------
        //PRIMA STAGIONE 2
        Episodi::create(
            [
                "idSerieTv" => 2,
                "titolo" => 'Andiamo',
                "descrizione" => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                "numStagione" => 1,
                "numEpisodio" => 1,
                "durata" => '50 min'
            ],
        );
        Episodi::create(
            [
                "idSerieTv" => 2,
                "titolo" => 'Al mare',
                "descrizione" => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                "numStagione" => 1,
                "numEpisodio" => 2,
                "durata" => '50 min'
            ],
        );
        Episodi::create(
            [
                "idSerieTv" => 2,
                "titolo" => 'Per nuotare',
                "descrizione" => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                "numStagione" => 1,
                "numEpisodio" => 3,
                "durata" => '50 min'
            ],
        );
        Episodi::create(
            [
                "idSerieTv" => 2,
                "titolo" => 'Tutti',
                "descrizione" => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                "numStagione" => 1,
                "numEpisodio" => 4,
                "durata" => '50 min'
            ],
        );
        Episodi::create(
            [
                "idSerieTv" => 2,
                "titolo" => 'Insieme',
                "descrizione" => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                "numStagione" => 1,
                "numEpisodio" => 5,
                "durata" => '50 min'
            ],
        );

        // SECONDA STAGIONE 2
        Episodi::create(
            [
                "idSerieTv" => 2,
                "titolo" => 'Ma dimmi',
                "descrizione" => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                "numStagione" => 2,
                "numEpisodio" => 1,
                "durata" => '45 min'
            ],
        );
        Episodi::create(
            [
                "idSerieTv" => 2,
                "titolo" => 'Cosa vuoi',
                "descrizione" => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                "numStagione" => 2,
                "numEpisodio" => 2,
                "durata" => '45 min'
            ],
        );
        Episodi::create(
            [
                "idSerieTv" => 2,
                "titolo" => 'Pesche e noci',
                "descrizione" => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                "numStagione" => 2,
                "numEpisodio" => 3,
                "durata" => '45 min'
            ],
        );
        Episodi::create(
            [
                "idSerieTv" => 2,
                "titolo" => 'Come mai',
                "descrizione" => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                "numStagione" => 2,
                "numEpisodio" => 4,
                "durata" => '45 min'
            ],
        );
        Episodi::create(
            [
                "idSerieTv" => 2,
                "titolo" => 'Ma chi sarai',
                "descrizione" => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                "numStagione" => 2,
                "numEpisodio" => 5,
                "durata" => '45 min'
            ],
        );
        // Terza STAGIONE 2
        Episodi::create(
            [
                "idSerieTv" => 2,
                "titolo" => 'Winx',
                "descrizione" => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                "numStagione" => 3,
                "numEpisodio" => 1,
                "durata" => '45 min'
            ],
        );
        Episodi::create(
            [
                "idSerieTv" => 2,
                "titolo" => 'La tua mano',
                "descrizione" => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                "numStagione" => 3,
                "numEpisodio" => 2,
                "durata" => '45 min'
            ],
        );
        Episodi::create(
            [
                "idSerieTv" => 2,
                "titolo" => 'Nella mia',
                "descrizione" => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                "numStagione" => 3,
                "numEpisodio" => 3,
                "durata" => '45 min'
            ],
        );
        Episodi::create(
            [
                "idSerieTv" => 2,
                "titolo" => 'Più forza ci daara',
                "descrizione" => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                "numStagione" => 3,
                "numEpisodio" => 4,
                "durata" => '45 min'
            ],
        );
        Episodi::create(
            [
                "idSerieTv" => 2,
                "titolo" => 'Se tu lo vuoi',
                "descrizione" => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                "numStagione" => 3,
                "numEpisodio" => 5,
                "durata" => '45 min'
            ],
        );

        // PRIMA STAGIONE 3
        Episodi::create(
            [
                "idSerieTv" => 3,
                "titolo" => 'Winnie',
                "descrizione" => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                "numStagione" => 1,
                "numEpisodio" => 1,
                "durata" => '50 min'
            ],
        );
        Episodi::create(
            [
                "idSerieTv" => 3,
                "titolo" => 'Pooh',
                "descrizione" => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                "numStagione" => 1,
                "numEpisodio" => 2,
                "durata" => '50 min'
            ],
        );
        Episodi::create(
            [
                "idSerieTv" => 3,
                "titolo" => 'Calamita',
                "descrizione" => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                "numStagione" => 1,
                "numEpisodio" => 3,
                "durata" => '50 min'
            ],
        );
        Episodi::create(
            [
                "idSerieTv" => 3,
                "titolo" => 'Finestra',
                "descrizione" => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                "numStagione" => 1,
                "numEpisodio" => 4,
                "durata" => '50 min'
            ],
        );
        Episodi::create(
            [
                "idSerieTv" => 3,
                "titolo" => 'Rotta',
                "descrizione" => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                "numStagione" => 1,
                "numEpisodio" => 5,
                "durata" => '50 min'
            ],
        );
        //----------------------------------------------------------
        //PRIMA STAGIONE 4
        Episodi::create(
            [
                "idSerieTv" => 4,
                "titolo" => 'Dove mi porti',
                "descrizione" => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                "numStagione" => 1,
                "numEpisodio" => 1,
                "durata" => '50 min'
            ],
        );
        Episodi::create(
            [
                "idSerieTv" => 4,
                "titolo" => 'Fiorellino',
                "descrizione" => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                "numStagione" => 1,
                "numEpisodio" => 2,
                "durata" => '50 min'
            ],
        );
        Episodi::create(
            [
                "idSerieTv" => 4,
                "titolo" => 'Campagnolo',
                "descrizione" => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                "numStagione" => 1,
                "numEpisodio" => 3,
                "durata" => '50 min'
            ],
        );
        Episodi::create(
            [
                "idSerieTv" => 4,
                "titolo" => 'Forse se',
                "descrizione" => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                "numStagione" => 1,
                "numEpisodio" => 4,
                "durata" => '50 min'
            ],
        );
        Episodi::create(
            [
                "idSerieTv" => 4,
                "titolo" => 'Le formiche',
                "descrizione" => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                "numStagione" => 1,
                "numEpisodio" => 5,
                "durata" => '50 min'
            ],
        );
        Episodi::create(
            [
                "idSerieTv" => 4,
                "titolo" => 'Non volano',
                "descrizione" => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                "numStagione" => 1,
                "numEpisodio" => 6,
                "durata" => '50 min'
            ],
        );

        // SECONDA STAGIONE 2
        Episodi::create(
            [
                "idSerieTv" => 4,
                "titolo" => 'Dove vai',
                "descrizione" => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                "numStagione" => 2,
                "numEpisodio" => 1,
                "durata" => '45 min'
            ],
        );
        Episodi::create(
            [
                "idSerieTv" => 4,
                "titolo" => 'Cosa ci fai',
                "descrizione" => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                "numStagione" => 2,
                "numEpisodio" => 2,
                "durata" => '45 min'
            ],
        );
        Episodi::create(
            [
                "idSerieTv" => 4,
                "titolo" => 'Fragole e mandorle',
                "descrizione" => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                "numStagione" => 2,
                "numEpisodio" => 3,
                "durata" => '45 min'
            ],
        );
        Episodi::create(
            [
                "idSerieTv" => 4,
                "titolo" => 'Tanti saluti',
                "descrizione" => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                "numStagione" => 2,
                "numEpisodio" => 4,
                "durata" => '45 min'
            ],
        );
        Episodi::create(
            [
                "idSerieTv" => 4,
                "titolo" => 'Buon Natale',
                "descrizione" => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                "numStagione" => 2,
                "numEpisodio" => 5,
                "durata" => '45 min'
            ],
        );
        Episodi::create(
            [
                "idSerieTv" => 4,
                "titolo" => 'Le formiche',
                "descrizione" => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                "numStagione" => 2,
                "numEpisodio" => 6,
                "durata" => '50 min'
            ],
        );
        //----------------------------------------------------------
        //PRIMA STAGIONE 2
        Episodi::create(
            [
                "idSerieTv" => 5,
                "titolo" => 'Se mi chiami',
                "descrizione" => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                "numStagione" => 1,
                "numEpisodio" => 1,
                "durata" => '50 min'
            ],
        );
        Episodi::create(
            [
                "idSerieTv" => 5,
                "titolo" => 'Non rispondo',
                "descrizione" => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                "numStagione" => 1,
                "numEpisodio" => 2,
                "durata" => '50 min'
            ],
        );
        Episodi::create(
            [
                "idSerieTv" => 5,
                "titolo" => 'Perchè il cielo è blu',
                "descrizione" => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                "numStagione" => 1,
                "numEpisodio" => 3,
                "durata" => '50 min'
            ],
        );
        Episodi::create(
            [
                "idSerieTv" => 5,
                "titolo" => 'E io sono giu',
                "descrizione" => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                "numStagione" => 1,
                "numEpisodio" => 4,
                "durata" => '50 min'
            ],
        );
        Episodi::create(
            [
                "idSerieTv" => 5,
                "titolo" => 'Molto giu',
                "descrizione" => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                "numStagione" => 1,
                "numEpisodio" => 5,
                "durata" => '50 min'
            ],
        );

        // SECONDA STAGIONE 2
        Episodi::create(
            [
                "idSerieTv" => 5,
                "titolo" => 'Dove vuoi andare',
                "descrizione" => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                "numStagione" => 2,
                "numEpisodio" => 1,
                "durata" => '45 min'
            ],
        );
        Episodi::create(
            [
                "idSerieTv" => 5,
                "titolo" => 'Non vuoi restare',
                "descrizione" => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                "numStagione" => 2,
                "numEpisodio" => 2,
                "durata" => '45 min'
            ],
        );
        Episodi::create(
            [
                "idSerieTv" => 5,
                "titolo" => 'Dobbiamo andare',
                "descrizione" => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                "numStagione" => 2,
                "numEpisodio" => 3,
                "durata" => '45 min'
            ],
        );
        Episodi::create(
            [
                "idSerieTv" => 5,
                "titolo" => 'Continua a cercare',
                "descrizione" => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                "numStagione" => 2,
                "numEpisodio" => 4,
                "durata" => '45 min'
            ],
        );
        Episodi::create(
            [
                "idSerieTv" => 5,
                "titolo" => 'dove vuoi stare',
                "descrizione" => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                "numStagione" => 2,
                "numEpisodio" => 5,
                "durata" => '45 min'
            ],
        );
        // Terza STAGIONE 2
        Episodi::create(
            [
                "idSerieTv" => 5,
                "titolo" => 'Mamma mia',
                "descrizione" => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                "numStagione" => 3,
                "numEpisodio" => 1,
                "durata" => '45 min'
            ],
        );
        Episodi::create(
            [
                "idSerieTv" => 5,
                "titolo" => 'Nanananan',
                "descrizione" => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                "numStagione" => 3,
                "numEpisodio" => 2,
                "durata" => '45 min'
            ],
        );
        Episodi::create(
            [
                "idSerieTv" => 5,
                "titolo" => 'My life',
                "descrizione" => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                "numStagione" => 3,
                "numEpisodio" => 3,
                "durata" => '45 min'
            ],
        );
        Episodi::create(
            [
                "idSerieTv" => 5,
                "titolo" => 'I cannor resist it',
                "descrizione" => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                "numStagione" => 3,
                "numEpisodio" => 4,
                "durata" => '45 min'
            ],
        );
        Episodi::create(
            [
                "idSerieTv" => 5,
                "titolo" => 'Money money money',
                "descrizione" => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                "numStagione" => 3,
                "numEpisodio" => 5,
                "durata" => '45 min'
            ],
        );
    }
}

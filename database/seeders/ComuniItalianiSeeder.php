<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ComuniItaliani;

class ComuniItalianiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $csv = storage_path('app/csv_db/comuniItaliani.csv');
        // $file = fopen($csv, 'r');
        // while (($data = fgetcsv($file, 7981, ',')) !== false) {
        //     ComuniItaliani::create(
        //         [
        //             'idComune' => $data[0],
        //             'nome' => $data[1],
        //             'regione' => $data[2],
        //             'provincia'=> $data[3],                   
        //             'void'=> $data[4],                
        //             'siglaProvincia'=> $data[5],                 
        //             'codiceComune'=> $data[6],             
        //             'col8'=> $data[7],                    
        //             'col9'=> $data[8],                 
        //             'cap'=> $data[9],                    
        //             'col11'=> $data[10],                   
        //             'col12'=> $data[11]
        //         ]
        //     );
        // }
    }
}

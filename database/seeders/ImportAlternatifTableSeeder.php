<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ImportAlternatifTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('import_alternatif')->delete();
        
        \DB::table('import_alternatif')->insert(array (
            0 => 
            array (
                'id' => 17,
                'nama' => 'Data Testing',
                'slug' => 'data-testing',
                'file' => '20230701082406-data-testing.xlsx',
                'count' => 10,
                'created_at' => '2023-07-01 20:24:06',
                'updated_at' => '2023-07-01 20:24:12',
            ),
        ));
        
        
    }
}
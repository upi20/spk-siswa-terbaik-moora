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
                'id' => 18,
                'nama' => 'Data Testing',
                'slug' => 'data-testing',
                'file' => '20230701104545-data-testing.xlsx',
                'count' => 10,
                'created_at' => '2023-07-01 22:45:45',
                'updated_at' => '2023-07-01 22:45:46',
            ),
        ));
        
        
    }
}
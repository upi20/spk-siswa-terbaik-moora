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
                'id' => 19,
                'nama' => 'Data testing',
                'slug' => 'data-testing',
                'file' => '20230701111657-data-testing.xlsx',
                'count' => 10,
                'created_at' => '2023-07-01 23:16:57',
                'updated_at' => '2023-07-01 23:16:58',
            ),
        ));
        
        
    }
}
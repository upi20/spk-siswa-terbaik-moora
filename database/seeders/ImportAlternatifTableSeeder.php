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
                'id' => 16,
                'nama' => 'Upload data',
                'slug' => 'upload-data',
                'file' => '20230701073447-upload-data.xlsx',
                'count' => 10,
                'created_at' => '2023-07-01 19:34:47',
                'updated_at' => '2023-07-01 19:34:47',
            ),
        ));
        
        
    }
}
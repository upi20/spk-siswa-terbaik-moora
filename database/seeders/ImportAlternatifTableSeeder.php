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
                'id' => 21,
                'nama' => 'Data siswa teladan',
                'slug' => 'data-siswa-teladan',
                'file' => '20230709031355-data-siswa-teladan.xlsx',
                'count' => 25,
                'created_at' => '2023-07-09 15:13:55',
                'updated_at' => '2023-07-09 15:13:56',
            ),
        ));
        
        
    }
}
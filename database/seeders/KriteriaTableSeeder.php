<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KriteriaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('kriteria')->delete();
        
        \DB::table('kriteria')->insert(array (
            0 => 
            array (
                'id' => 1,
                'bobot' => 40,
                'jenis' => 'Cost',
                'nama' => 'Biaya',
                'slug' => 'biaya',
                'kode' => 'C1',
                'created_at' => '2023-07-01 16:01:00',
                'updated_at' => '2023-07-01 16:29:14',
            ),
            1 => 
            array (
                'id' => 2,
                'bobot' => 25,
                'jenis' => 'Benefit',
                'nama' => 'Jarak',
                'slug' => 'jarak',
                'kode' => 'C2',
                'created_at' => '2023-07-01 16:01:18',
                'updated_at' => '2023-07-01 16:01:18',
            ),
            2 => 
            array (
                'id' => 3,
                'bobot' => 20,
                'jenis' => 'Benefit',
                'nama' => 'Waktu',
                'slug' => 'waktu',
                'kode' => 'C3',
                'created_at' => '2023-07-01 16:01:32',
                'updated_at' => '2023-07-01 16:01:32',
            ),
            3 => 
            array (
                'id' => 4,
                'bobot' => 15,
                'jenis' => 'Benefit',
                'nama' => 'Ketinggian',
                'slug' => 'ketinggian',
                'kode' => 'C4',
                'created_at' => '2023-07-01 16:01:48',
                'updated_at' => '2023-07-01 16:01:48',
            ),
        ));
        
        
    }
}
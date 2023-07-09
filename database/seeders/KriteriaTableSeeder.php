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
                'id' => 5,
                'bobot' => 30,
                'jenis' => 'Cost',
                'nama' => 'Absensi',
                'slug' => 'absensi',
                'kode' => 'C1',
                'dari' => 0,
                'sampai' => 100,
                'created_at' => '2023-07-09 15:00:51',
                'updated_at' => '2023-07-09 15:06:45',
            ),
            1 => 
            array (
                'id' => 6,
                'bobot' => 20,
                'jenis' => 'Benefit',
                'nama' => 'Nilai Raport',
                'slug' => 'nilai-raport',
                'kode' => 'C2',
                'dari' => 0,
                'sampai' => 100,
                'created_at' => '2023-07-09 15:01:02',
                'updated_at' => '2023-07-09 15:06:50',
            ),
            2 => 
            array (
                'id' => 7,
                'bobot' => 25,
                'jenis' => 'Benefit',
                'nama' => 'Keaktifan',
                'slug' => 'keaktifan',
                'kode' => 'C3',
                'dari' => 0,
                'sampai' => 100,
                'created_at' => '2023-07-09 15:01:17',
                'updated_at' => '2023-07-09 15:06:58',
            ),
            3 => 
            array (
                'id' => 8,
                'bobot' => 25,
                'jenis' => 'Benefit',
                'nama' => 'Budi Pekerti',
                'slug' => 'budi-pekerti',
                'kode' => 'C4',
                'dari' => 0,
                'sampai' => 100,
                'created_at' => '2023-07-09 15:01:29',
                'updated_at' => '2023-07-09 15:07:04',
            ),
        ));
        
        
    }
}
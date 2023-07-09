<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KriteriaNilaiTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('kriteria_nilai')->delete();
        
        \DB::table('kriteria_nilai')->insert(array (
            0 => 
            array (
                'id' => 45,
                'kriteria_id' => 5,
                'nama' => 'Sangat Kurang',
                'nilai' => 20,
                'dari' => 0,
                'sampai' => 20,
                'created_at' => '2023-07-09 15:01:50',
                'updated_at' => '2023-07-09 15:01:50',
            ),
            1 => 
            array (
                'id' => 46,
                'kriteria_id' => 5,
                'nama' => 'Kurang',
                'nilai' => 40,
                'dari' => 21,
                'sampai' => 40,
                'created_at' => '2023-07-09 15:01:50',
                'updated_at' => '2023-07-09 15:01:50',
            ),
            2 => 
            array (
                'id' => 47,
                'kriteria_id' => 5,
                'nama' => 'Baik',
                'nilai' => 60,
                'dari' => 41,
                'sampai' => 60,
                'created_at' => '2023-07-09 15:01:50',
                'updated_at' => '2023-07-09 15:01:50',
            ),
            3 => 
            array (
                'id' => 48,
                'kriteria_id' => 5,
                'nama' => 'Cukup Baik',
                'nilai' => 80,
                'dari' => 61,
                'sampai' => 80,
                'created_at' => '2023-07-09 15:01:50',
                'updated_at' => '2023-07-09 15:01:50',
            ),
            4 => 
            array (
                'id' => 49,
                'kriteria_id' => 5,
                'nama' => 'Sangat Baik',
                'nilai' => 100,
                'dari' => 81,
                'sampai' => 100,
                'created_at' => '2023-07-09 15:01:50',
                'updated_at' => '2023-07-09 15:01:50',
            ),
            5 => 
            array (
                'id' => 50,
                'kriteria_id' => 6,
                'nama' => 'Sangat Kurang',
                'nilai' => 20,
                'dari' => 0,
                'sampai' => 20,
                'created_at' => '2023-07-09 15:01:50',
                'updated_at' => '2023-07-09 15:01:50',
            ),
            6 => 
            array (
                'id' => 51,
                'kriteria_id' => 6,
                'nama' => 'Kurang',
                'nilai' => 40,
                'dari' => 21,
                'sampai' => 40,
                'created_at' => '2023-07-09 15:01:50',
                'updated_at' => '2023-07-09 15:01:50',
            ),
            7 => 
            array (
                'id' => 52,
                'kriteria_id' => 6,
                'nama' => 'Baik',
                'nilai' => 60,
                'dari' => 41,
                'sampai' => 60,
                'created_at' => '2023-07-09 15:01:50',
                'updated_at' => '2023-07-09 15:01:50',
            ),
            8 => 
            array (
                'id' => 53,
                'kriteria_id' => 6,
                'nama' => 'Cukup Baik',
                'nilai' => 80,
                'dari' => 61,
                'sampai' => 80,
                'created_at' => '2023-07-09 15:01:50',
                'updated_at' => '2023-07-09 15:01:50',
            ),
            9 => 
            array (
                'id' => 54,
                'kriteria_id' => 6,
                'nama' => 'Sangat Baik',
                'nilai' => 100,
                'dari' => 81,
                'sampai' => 100,
                'created_at' => '2023-07-09 15:01:50',
                'updated_at' => '2023-07-09 15:01:50',
            ),
            10 => 
            array (
                'id' => 55,
                'kriteria_id' => 7,
                'nama' => 'Sangat Kurang',
                'nilai' => 20,
                'dari' => 0,
                'sampai' => 20,
                'created_at' => '2023-07-09 15:01:50',
                'updated_at' => '2023-07-09 15:01:50',
            ),
            11 => 
            array (
                'id' => 56,
                'kriteria_id' => 7,
                'nama' => 'Kurang',
                'nilai' => 40,
                'dari' => 21,
                'sampai' => 40,
                'created_at' => '2023-07-09 15:01:50',
                'updated_at' => '2023-07-09 15:01:50',
            ),
            12 => 
            array (
                'id' => 57,
                'kriteria_id' => 7,
                'nama' => 'Baik',
                'nilai' => 60,
                'dari' => 41,
                'sampai' => 60,
                'created_at' => '2023-07-09 15:01:50',
                'updated_at' => '2023-07-09 15:01:50',
            ),
            13 => 
            array (
                'id' => 58,
                'kriteria_id' => 7,
                'nama' => 'Cukup Baik',
                'nilai' => 80,
                'dari' => 61,
                'sampai' => 80,
                'created_at' => '2023-07-09 15:01:50',
                'updated_at' => '2023-07-09 15:01:50',
            ),
            14 => 
            array (
                'id' => 59,
                'kriteria_id' => 7,
                'nama' => 'Sangat Baik',
                'nilai' => 100,
                'dari' => 81,
                'sampai' => 100,
                'created_at' => '2023-07-09 15:01:50',
                'updated_at' => '2023-07-09 15:01:50',
            ),
            15 => 
            array (
                'id' => 60,
                'kriteria_id' => 8,
                'nama' => 'Sangat Kurang',
                'nilai' => 20,
                'dari' => 0,
                'sampai' => 20,
                'created_at' => '2023-07-09 15:01:50',
                'updated_at' => '2023-07-09 15:01:50',
            ),
            16 => 
            array (
                'id' => 61,
                'kriteria_id' => 8,
                'nama' => 'Kurang',
                'nilai' => 40,
                'dari' => 21,
                'sampai' => 40,
                'created_at' => '2023-07-09 15:01:50',
                'updated_at' => '2023-07-09 15:01:50',
            ),
            17 => 
            array (
                'id' => 62,
                'kriteria_id' => 8,
                'nama' => 'Baik',
                'nilai' => 60,
                'dari' => 41,
                'sampai' => 60,
                'created_at' => '2023-07-09 15:01:50',
                'updated_at' => '2023-07-09 15:01:50',
            ),
            18 => 
            array (
                'id' => 63,
                'kriteria_id' => 8,
                'nama' => 'Cukup Baik',
                'nilai' => 80,
                'dari' => 61,
                'sampai' => 80,
                'created_at' => '2023-07-09 15:01:50',
                'updated_at' => '2023-07-09 15:01:50',
            ),
            19 => 
            array (
                'id' => 64,
                'kriteria_id' => 8,
                'nama' => 'Sangat Baik',
                'nilai' => 100,
                'dari' => 81,
                'sampai' => 100,
                'created_at' => '2023-07-09 15:01:50',
                'updated_at' => '2023-07-09 15:01:50',
            ),
        ));
        
        
    }
}
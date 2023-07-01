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
                'id' => 1,
                'kriteria_id' => 1,
                'nama' => 'Sangat baik',
                'nilai' => 50,
                'dari' => 10000,
                'sampai' => 14999,
                'created_at' => '2023-07-01 16:27:30',
                'updated_at' => '2023-07-01 16:30:18',
            ),
            1 => 
            array (
                'id' => 2,
                'kriteria_id' => 1,
                'nama' => 'Cukup baik',
                'nilai' => 40,
                'dari' => 15000,
                'sampai' => 19999,
                'created_at' => '2023-07-01 16:27:47',
                'updated_at' => '2023-07-01 16:27:47',
            ),
            2 => 
            array (
                'id' => 3,
                'kriteria_id' => 1,
                'nama' => 'Baik',
                'nilai' => 30,
                'dari' => 20000,
                'sampai' => 24999,
                'created_at' => '2023-07-01 16:28:07',
                'updated_at' => '2023-07-01 16:28:07',
            ),
            3 => 
            array (
                'id' => 4,
                'kriteria_id' => 1,
                'nama' => 'Cukup',
                'nilai' => 20,
                'dari' => 25000,
                'sampai' => 29999,
                'created_at' => '2023-07-01 16:28:20',
                'updated_at' => '2023-07-01 16:28:20',
            ),
            4 => 
            array (
                'id' => 5,
                'kriteria_id' => 1,
                'nama' => 'Buruk',
                'nilai' => 10,
                'dari' => 30000,
                'sampai' => 35000,
                'created_at' => '2023-07-01 16:28:33',
                'updated_at' => '2023-07-01 16:28:33',
            ),
            5 => 
            array (
                'id' => 7,
                'kriteria_id' => 2,
                'nama' => 'Sangat baik',
                'nilai' => 50,
                'dari' => 11,
                'sampai' => 25,
                'created_at' => '2023-07-01 16:32:38',
                'updated_at' => '2023-07-01 16:32:38',
            ),
            6 => 
            array (
                'id' => 8,
                'kriteria_id' => 2,
                'nama' => 'Cukup baik',
                'nilai' => 40,
                'dari' => 26,
                'sampai' => 40,
                'created_at' => '2023-07-01 16:32:50',
                'updated_at' => '2023-07-01 16:32:50',
            ),
            7 => 
            array (
                'id' => 9,
                'kriteria_id' => 2,
                'nama' => 'Baik',
                'nilai' => 30,
                'dari' => 41,
                'sampai' => 55,
                'created_at' => '2023-07-01 16:33:11',
                'updated_at' => '2023-07-01 16:33:11',
            ),
            8 => 
            array (
                'id' => 10,
                'kriteria_id' => 2,
                'nama' => 'Cukup',
                'nilai' => 20,
                'dari' => 56,
                'sampai' => 70,
                'created_at' => '2023-07-01 16:33:23',
                'updated_at' => '2023-07-01 16:33:23',
            ),
            9 => 
            array (
                'id' => 11,
                'kriteria_id' => 3,
                'nama' => 'Sangat baik',
                'nilai' => 50,
                'dari' => 30,
                'sampai' => 60,
                'created_at' => '2023-07-01 16:33:48',
                'updated_at' => '2023-07-01 16:33:48',
            ),
            10 => 
            array (
                'id' => 12,
                'kriteria_id' => 3,
                'nama' => 'Cukup baik',
                'nilai' => 40,
                'dari' => 61,
                'sampai' => 90,
                'created_at' => '2023-07-01 16:34:04',
                'updated_at' => '2023-07-01 16:34:04',
            ),
            11 => 
            array (
                'id' => 13,
                'kriteria_id' => 3,
                'nama' => 'Baik',
                'nilai' => 30,
                'dari' => 91,
                'sampai' => 120,
                'created_at' => '2023-07-01 16:34:16',
                'updated_at' => '2023-07-01 16:34:16',
            ),
            12 => 
            array (
                'id' => 14,
                'kriteria_id' => 3,
                'nama' => 'Cukup',
                'nilai' => 20,
                'dari' => 121,
                'sampai' => 150,
                'created_at' => '2023-07-01 16:34:32',
                'updated_at' => '2023-07-01 16:34:32',
            ),
            13 => 
            array (
                'id' => 15,
                'kriteria_id' => 4,
                'nama' => 'Sangat baik',
                'nilai' => 50,
                'dari' => 601,
                'sampai' => 1200,
                'created_at' => '2023-07-01 16:34:59',
                'updated_at' => '2023-07-01 16:34:59',
            ),
            14 => 
            array (
                'id' => 16,
                'kriteria_id' => 4,
                'nama' => 'Cukup baik',
                'nilai' => 40,
                'dari' => 1201,
                'sampai' => 1800,
                'created_at' => '2023-07-01 16:35:11',
                'updated_at' => '2023-07-01 16:35:11',
            ),
            15 => 
            array (
                'id' => 17,
                'kriteria_id' => 4,
                'nama' => 'Baik',
                'nilai' => 30,
                'dari' => 1801,
                'sampai' => 2400,
                'created_at' => '2023-07-01 16:35:24',
                'updated_at' => '2023-07-01 16:35:24',
            ),
            16 => 
            array (
                'id' => 18,
                'kriteria_id' => 4,
                'nama' => 'Cukup',
                'nilai' => 20,
                'dari' => 2401,
                'sampai' => 3000,
                'created_at' => '2023-07-01 16:35:38',
                'updated_at' => '2023-07-01 16:35:38',
            ),
        ));
        
        
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AlternatifNilaiTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('alternatif_nilai')->delete();
        
        \DB::table('alternatif_nilai')->insert(array (
            0 => 
            array (
                'id' => 53,
                'alternatif_id' => 12,
                'kriteria_id' => 1,
                'kirteria_nilai_id' => 4,
                'nilai' => 25000,
                'created_at' => '2023-07-01 20:24:06',
                'updated_at' => '2023-07-01 20:24:06',
            ),
            1 => 
            array (
                'id' => 54,
                'alternatif_id' => 12,
                'kriteria_id' => 2,
                'kirteria_nilai_id' => 7,
                'nilai' => 16,
                'created_at' => '2023-07-01 20:24:06',
                'updated_at' => '2023-07-01 20:24:06',
            ),
            2 => 
            array (
                'id' => 55,
                'alternatif_id' => 12,
                'kriteria_id' => 3,
                'kirteria_nilai_id' => 11,
                'nilai' => 60,
                'created_at' => '2023-07-01 20:24:06',
                'updated_at' => '2023-07-01 20:24:06',
            ),
            3 => 
            array (
                'id' => 56,
                'alternatif_id' => 12,
                'kriteria_id' => 4,
                'kirteria_nilai_id' => 16,
                'nilai' => 1587,
                'created_at' => '2023-07-01 20:24:06',
                'updated_at' => '2023-07-01 20:24:06',
            ),
            4 => 
            array (
                'id' => 57,
                'alternatif_id' => 13,
                'kriteria_id' => 1,
                'kirteria_nilai_id' => 1,
                'nilai' => 10000,
                'created_at' => '2023-07-01 20:24:06',
                'updated_at' => '2023-07-01 20:24:06',
            ),
            5 => 
            array (
                'id' => 58,
                'alternatif_id' => 13,
                'kriteria_id' => 2,
                'kirteria_nilai_id' => 8,
                'nilai' => 28,
                'created_at' => '2023-07-01 20:24:06',
                'updated_at' => '2023-07-01 20:24:06',
            ),
            6 => 
            array (
                'id' => 59,
                'alternatif_id' => 13,
                'kriteria_id' => 3,
                'kirteria_nilai_id' => 12,
                'nilai' => 90,
                'created_at' => '2023-07-01 20:24:06',
                'updated_at' => '2023-07-01 20:24:06',
            ),
            7 => 
            array (
                'id' => 60,
                'alternatif_id' => 13,
                'kriteria_id' => 4,
                'kirteria_nilai_id' => 17,
                'nilai' => 2208,
                'created_at' => '2023-07-01 20:24:06',
                'updated_at' => '2023-07-01 20:24:06',
            ),
            8 => 
            array (
                'id' => 61,
                'alternatif_id' => 14,
                'kriteria_id' => 1,
                'kirteria_nilai_id' => 2,
                'nilai' => 15000,
                'created_at' => '2023-07-01 20:24:06',
                'updated_at' => '2023-07-01 20:24:06',
            ),
            9 => 
            array (
                'id' => 62,
                'alternatif_id' => 14,
                'kriteria_id' => 2,
                'kirteria_nilai_id' => 10,
                'nilai' => 58,
                'created_at' => '2023-07-01 20:24:06',
                'updated_at' => '2023-07-01 20:24:06',
            ),
            10 => 
            array (
                'id' => 63,
                'alternatif_id' => 14,
                'kriteria_id' => 3,
                'kirteria_nilai_id' => 13,
                'nilai' => 110,
                'created_at' => '2023-07-01 20:24:06',
                'updated_at' => '2023-07-01 20:24:06',
            ),
            11 => 
            array (
                'id' => 64,
                'alternatif_id' => 14,
                'kriteria_id' => 4,
                'kirteria_nilai_id' => 17,
                'nilai' => 1824,
                'created_at' => '2023-07-01 20:24:06',
                'updated_at' => '2023-07-01 20:24:06',
            ),
            12 => 
            array (
                'id' => 65,
                'alternatif_id' => 15,
                'kriteria_id' => 1,
                'kirteria_nilai_id' => 3,
                'nilai' => 20000,
                'created_at' => '2023-07-01 20:24:06',
                'updated_at' => '2023-07-01 20:24:06',
            ),
            13 => 
            array (
                'id' => 66,
                'alternatif_id' => 15,
                'kriteria_id' => 2,
                'kirteria_nilai_id' => 8,
                'nilai' => 39,
                'created_at' => '2023-07-01 20:24:06',
                'updated_at' => '2023-07-01 20:24:06',
            ),
            14 => 
            array (
                'id' => 67,
                'alternatif_id' => 15,
                'kriteria_id' => 3,
                'kirteria_nilai_id' => 12,
                'nilai' => 90,
                'created_at' => '2023-07-01 20:24:06',
                'updated_at' => '2023-07-01 20:24:06',
            ),
            15 => 
            array (
                'id' => 68,
                'alternatif_id' => 15,
                'kriteria_id' => 4,
                'kirteria_nilai_id' => 16,
                'nilai' => 1650,
                'created_at' => '2023-07-01 20:24:06',
                'updated_at' => '2023-07-01 20:24:06',
            ),
            16 => 
            array (
                'id' => 69,
                'alternatif_id' => 16,
                'kriteria_id' => 1,
                'kirteria_nilai_id' => 2,
                'nilai' => 15000,
                'created_at' => '2023-07-01 20:24:06',
                'updated_at' => '2023-07-01 20:24:06',
            ),
            17 => 
            array (
                'id' => 70,
                'alternatif_id' => 16,
                'kriteria_id' => 2,
                'kirteria_nilai_id' => 9,
                'nilai' => 46,
                'created_at' => '2023-07-01 20:24:06',
                'updated_at' => '2023-07-01 20:24:06',
            ),
            18 => 
            array (
                'id' => 71,
                'alternatif_id' => 16,
                'kriteria_id' => 3,
                'kirteria_nilai_id' => 14,
                'nilai' => 130,
                'created_at' => '2023-07-01 20:24:06',
                'updated_at' => '2023-07-01 20:24:06',
            ),
            19 => 
            array (
                'id' => 72,
                'alternatif_id' => 16,
                'kriteria_id' => 4,
                'kirteria_nilai_id' => 17,
                'nilai' => 2194,
                'created_at' => '2023-07-01 20:24:06',
                'updated_at' => '2023-07-01 20:24:06',
            ),
            20 => 
            array (
                'id' => 73,
                'alternatif_id' => 17,
                'kriteria_id' => 1,
                'kirteria_nilai_id' => 5,
                'nilai' => 30000,
                'created_at' => '2023-07-01 20:24:06',
                'updated_at' => '2023-07-01 20:24:06',
            ),
            21 => 
            array (
                'id' => 74,
                'alternatif_id' => 17,
                'kriteria_id' => 2,
                'kirteria_nilai_id' => 10,
                'nilai' => 56,
                'created_at' => '2023-07-01 20:24:06',
                'updated_at' => '2023-07-01 20:24:06',
            ),
            22 => 
            array (
                'id' => 75,
                'alternatif_id' => 17,
                'kriteria_id' => 3,
                'kirteria_nilai_id' => 13,
                'nilai' => 105,
                'created_at' => '2023-07-01 20:24:06',
                'updated_at' => '2023-07-01 20:24:06',
            ),
            23 => 
            array (
                'id' => 76,
                'alternatif_id' => 17,
                'kriteria_id' => 4,
                'kirteria_nilai_id' => 18,
                'nilai' => 2434,
                'created_at' => '2023-07-01 20:24:06',
                'updated_at' => '2023-07-01 20:24:06',
            ),
            24 => 
            array (
                'id' => 77,
                'alternatif_id' => 18,
                'kriteria_id' => 1,
                'kirteria_nilai_id' => 5,
                'nilai' => 35000,
                'created_at' => '2023-07-01 20:24:06',
                'updated_at' => '2023-07-01 20:24:06',
            ),
            25 => 
            array (
                'id' => 78,
                'alternatif_id' => 18,
                'kriteria_id' => 2,
                'kirteria_nilai_id' => 9,
                'nilai' => 45,
                'created_at' => '2023-07-01 20:24:06',
                'updated_at' => '2023-07-01 20:24:06',
            ),
            26 => 
            array (
                'id' => 79,
                'alternatif_id' => 18,
                'kriteria_id' => 3,
                'kirteria_nilai_id' => 12,
                'nilai' => 90,
                'created_at' => '2023-07-01 20:24:06',
                'updated_at' => '2023-07-01 20:24:06',
            ),
            27 => 
            array (
                'id' => 80,
                'alternatif_id' => 18,
                'kriteria_id' => 4,
                'kirteria_nilai_id' => 17,
                'nilai' => 2223,
                'created_at' => '2023-07-01 20:24:06',
                'updated_at' => '2023-07-01 20:24:06',
            ),
            28 => 
            array (
                'id' => 81,
                'alternatif_id' => 19,
                'kriteria_id' => 1,
                'kirteria_nilai_id' => 3,
                'nilai' => 20000,
                'created_at' => '2023-07-01 20:24:06',
                'updated_at' => '2023-07-01 20:24:06',
            ),
            29 => 
            array (
                'id' => 82,
                'alternatif_id' => 19,
                'kriteria_id' => 2,
                'kirteria_nilai_id' => 9,
                'nilai' => 47,
                'created_at' => '2023-07-01 20:24:06',
                'updated_at' => '2023-07-01 20:24:06',
            ),
            30 => 
            array (
                'id' => 83,
                'alternatif_id' => 19,
                'kriteria_id' => 3,
                'kirteria_nilai_id' => 12,
                'nilai' => 90,
                'created_at' => '2023-07-01 20:24:06',
                'updated_at' => '2023-07-01 20:24:06',
            ),
            31 => 
            array (
                'id' => 84,
                'alternatif_id' => 19,
                'kriteria_id' => 4,
                'kirteria_nilai_id' => 17,
                'nilai' => 1994,
                'created_at' => '2023-07-01 20:24:06',
                'updated_at' => '2023-07-01 20:24:06',
            ),
            32 => 
            array (
                'id' => 85,
                'alternatif_id' => 20,
                'kriteria_id' => 1,
                'kirteria_nilai_id' => 1,
                'nilai' => 10000,
                'created_at' => '2023-07-01 20:24:06',
                'updated_at' => '2023-07-01 20:24:06',
            ),
            33 => 
            array (
                'id' => 86,
                'alternatif_id' => 20,
                'kriteria_id' => 2,
                'kirteria_nilai_id' => 7,
                'nilai' => 25,
                'created_at' => '2023-07-01 20:24:07',
                'updated_at' => '2023-07-01 20:24:07',
            ),
            34 => 
            array (
                'id' => 87,
                'alternatif_id' => 20,
                'kriteria_id' => 3,
                'kirteria_nilai_id' => 11,
                'nilai' => 60,
                'created_at' => '2023-07-01 20:24:07',
                'updated_at' => '2023-07-01 20:24:07',
            ),
            35 => 
            array (
                'id' => 88,
                'alternatif_id' => 20,
                'kriteria_id' => 4,
                'kirteria_nilai_id' => 16,
                'nilai' => 1408,
                'created_at' => '2023-07-01 20:24:07',
                'updated_at' => '2023-07-01 20:24:07',
            ),
            36 => 
            array (
                'id' => 89,
                'alternatif_id' => 11,
                'kriteria_id' => 1,
                'kirteria_nilai_id' => 1,
                'nilai' => 10000,
                'created_at' => '2023-07-01 20:28:47',
                'updated_at' => '2023-07-01 20:28:47',
            ),
            37 => 
            array (
                'id' => 90,
                'alternatif_id' => 11,
                'kriteria_id' => 2,
                'kirteria_nilai_id' => 7,
                'nilai' => 22,
                'created_at' => '2023-07-01 20:28:47',
                'updated_at' => '2023-07-01 20:28:47',
            ),
            38 => 
            array (
                'id' => 91,
                'alternatif_id' => 11,
                'kriteria_id' => 3,
                'kirteria_nilai_id' => 12,
                'nilai' => 90,
                'created_at' => '2023-07-01 20:28:47',
                'updated_at' => '2023-07-01 20:28:47',
            ),
            39 => 
            array (
                'id' => 92,
                'alternatif_id' => 11,
                'kriteria_id' => 4,
                'kirteria_nilai_id' => 17,
                'nilai' => 2064,
                'created_at' => '2023-07-01 20:28:47',
                'updated_at' => '2023-07-01 20:28:47',
            ),
        ));
        
        
    }
}
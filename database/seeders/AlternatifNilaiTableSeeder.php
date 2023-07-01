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
                'id' => 1,
                'alternatif_id' => 1,
                'kriteria_id' => 1,
                'kirteria_nilai_id' => 2,
                'nilai' => 15000,
                'created_at' => '2023-07-01 19:34:47',
                'updated_at' => '2023-07-01 19:34:47',
            ),
            1 => 
            array (
                'id' => 2,
                'alternatif_id' => 1,
                'kriteria_id' => 2,
                'kirteria_nilai_id' => 7,
                'nilai' => 22,
                'created_at' => '2023-07-01 19:34:47',
                'updated_at' => '2023-07-01 19:34:47',
            ),
            2 => 
            array (
                'id' => 3,
                'alternatif_id' => 1,
                'kriteria_id' => 3,
                'kirteria_nilai_id' => 12,
                'nilai' => 90,
                'created_at' => '2023-07-01 19:34:47',
                'updated_at' => '2023-07-01 19:34:47',
            ),
            3 => 
            array (
                'id' => 4,
                'alternatif_id' => 1,
                'kriteria_id' => 4,
                'kirteria_nilai_id' => 17,
                'nilai' => 2064,
                'created_at' => '2023-07-01 19:34:47',
                'updated_at' => '2023-07-01 19:34:47',
            ),
            4 => 
            array (
                'id' => 5,
                'alternatif_id' => 2,
                'kriteria_id' => 1,
                'kirteria_nilai_id' => 4,
                'nilai' => 25000,
                'created_at' => '2023-07-01 19:34:47',
                'updated_at' => '2023-07-01 19:34:47',
            ),
            5 => 
            array (
                'id' => 6,
                'alternatif_id' => 2,
                'kriteria_id' => 2,
                'kirteria_nilai_id' => 7,
                'nilai' => 16,
                'created_at' => '2023-07-01 19:34:47',
                'updated_at' => '2023-07-01 19:34:47',
            ),
            6 => 
            array (
                'id' => 7,
                'alternatif_id' => 2,
                'kriteria_id' => 3,
                'kirteria_nilai_id' => 11,
                'nilai' => 60,
                'created_at' => '2023-07-01 19:34:47',
                'updated_at' => '2023-07-01 19:34:47',
            ),
            7 => 
            array (
                'id' => 8,
                'alternatif_id' => 2,
                'kriteria_id' => 4,
                'kirteria_nilai_id' => 16,
                'nilai' => 1587,
                'created_at' => '2023-07-01 19:34:47',
                'updated_at' => '2023-07-01 19:34:47',
            ),
            8 => 
            array (
                'id' => 9,
                'alternatif_id' => 3,
                'kriteria_id' => 1,
                'kirteria_nilai_id' => 1,
                'nilai' => 10000,
                'created_at' => '2023-07-01 19:34:47',
                'updated_at' => '2023-07-01 19:34:47',
            ),
            9 => 
            array (
                'id' => 10,
                'alternatif_id' => 3,
                'kriteria_id' => 2,
                'kirteria_nilai_id' => 8,
                'nilai' => 28,
                'created_at' => '2023-07-01 19:34:47',
                'updated_at' => '2023-07-01 19:34:47',
            ),
            10 => 
            array (
                'id' => 11,
                'alternatif_id' => 3,
                'kriteria_id' => 3,
                'kirteria_nilai_id' => 12,
                'nilai' => 90,
                'created_at' => '2023-07-01 19:34:47',
                'updated_at' => '2023-07-01 19:34:47',
            ),
            11 => 
            array (
                'id' => 12,
                'alternatif_id' => 3,
                'kriteria_id' => 4,
                'kirteria_nilai_id' => 17,
                'nilai' => 2208,
                'created_at' => '2023-07-01 19:34:47',
                'updated_at' => '2023-07-01 19:34:47',
            ),
            12 => 
            array (
                'id' => 13,
                'alternatif_id' => 4,
                'kriteria_id' => 1,
                'kirteria_nilai_id' => 2,
                'nilai' => 15000,
                'created_at' => '2023-07-01 19:34:47',
                'updated_at' => '2023-07-01 19:34:47',
            ),
            13 => 
            array (
                'id' => 14,
                'alternatif_id' => 4,
                'kriteria_id' => 2,
                'kirteria_nilai_id' => 10,
                'nilai' => 58,
                'created_at' => '2023-07-01 19:34:47',
                'updated_at' => '2023-07-01 19:34:47',
            ),
            14 => 
            array (
                'id' => 15,
                'alternatif_id' => 4,
                'kriteria_id' => 3,
                'kirteria_nilai_id' => 13,
                'nilai' => 110,
                'created_at' => '2023-07-01 19:34:47',
                'updated_at' => '2023-07-01 19:34:47',
            ),
            15 => 
            array (
                'id' => 16,
                'alternatif_id' => 4,
                'kriteria_id' => 4,
                'kirteria_nilai_id' => 17,
                'nilai' => 1824,
                'created_at' => '2023-07-01 19:34:47',
                'updated_at' => '2023-07-01 19:34:47',
            ),
            16 => 
            array (
                'id' => 17,
                'alternatif_id' => 5,
                'kriteria_id' => 1,
                'kirteria_nilai_id' => 3,
                'nilai' => 20000,
                'created_at' => '2023-07-01 19:34:47',
                'updated_at' => '2023-07-01 19:34:47',
            ),
            17 => 
            array (
                'id' => 18,
                'alternatif_id' => 5,
                'kriteria_id' => 2,
                'kirteria_nilai_id' => 8,
                'nilai' => 39,
                'created_at' => '2023-07-01 19:34:47',
                'updated_at' => '2023-07-01 19:34:47',
            ),
            18 => 
            array (
                'id' => 19,
                'alternatif_id' => 5,
                'kriteria_id' => 3,
                'kirteria_nilai_id' => 12,
                'nilai' => 90,
                'created_at' => '2023-07-01 19:34:47',
                'updated_at' => '2023-07-01 19:34:47',
            ),
            19 => 
            array (
                'id' => 20,
                'alternatif_id' => 5,
                'kriteria_id' => 4,
                'kirteria_nilai_id' => 16,
                'nilai' => 1650,
                'created_at' => '2023-07-01 19:34:47',
                'updated_at' => '2023-07-01 19:34:47',
            ),
            20 => 
            array (
                'id' => 21,
                'alternatif_id' => 6,
                'kriteria_id' => 1,
                'kirteria_nilai_id' => 2,
                'nilai' => 15000,
                'created_at' => '2023-07-01 19:34:47',
                'updated_at' => '2023-07-01 19:34:47',
            ),
            21 => 
            array (
                'id' => 22,
                'alternatif_id' => 6,
                'kriteria_id' => 2,
                'kirteria_nilai_id' => 9,
                'nilai' => 46,
                'created_at' => '2023-07-01 19:34:47',
                'updated_at' => '2023-07-01 19:34:47',
            ),
            22 => 
            array (
                'id' => 23,
                'alternatif_id' => 6,
                'kriteria_id' => 3,
                'kirteria_nilai_id' => 14,
                'nilai' => 130,
                'created_at' => '2023-07-01 19:34:47',
                'updated_at' => '2023-07-01 19:34:47',
            ),
            23 => 
            array (
                'id' => 24,
                'alternatif_id' => 6,
                'kriteria_id' => 4,
                'kirteria_nilai_id' => 17,
                'nilai' => 2194,
                'created_at' => '2023-07-01 19:34:47',
                'updated_at' => '2023-07-01 19:34:47',
            ),
            24 => 
            array (
                'id' => 25,
                'alternatif_id' => 7,
                'kriteria_id' => 1,
                'kirteria_nilai_id' => 5,
                'nilai' => 30000,
                'created_at' => '2023-07-01 19:34:47',
                'updated_at' => '2023-07-01 19:34:47',
            ),
            25 => 
            array (
                'id' => 26,
                'alternatif_id' => 7,
                'kriteria_id' => 2,
                'kirteria_nilai_id' => 10,
                'nilai' => 56,
                'created_at' => '2023-07-01 19:34:47',
                'updated_at' => '2023-07-01 19:34:47',
            ),
            26 => 
            array (
                'id' => 27,
                'alternatif_id' => 7,
                'kriteria_id' => 3,
                'kirteria_nilai_id' => 13,
                'nilai' => 105,
                'created_at' => '2023-07-01 19:34:47',
                'updated_at' => '2023-07-01 19:34:47',
            ),
            27 => 
            array (
                'id' => 28,
                'alternatif_id' => 7,
                'kriteria_id' => 4,
                'kirteria_nilai_id' => 18,
                'nilai' => 2434,
                'created_at' => '2023-07-01 19:34:47',
                'updated_at' => '2023-07-01 19:34:47',
            ),
            28 => 
            array (
                'id' => 29,
                'alternatif_id' => 8,
                'kriteria_id' => 1,
                'kirteria_nilai_id' => 5,
                'nilai' => 35000,
                'created_at' => '2023-07-01 19:34:47',
                'updated_at' => '2023-07-01 19:34:47',
            ),
            29 => 
            array (
                'id' => 30,
                'alternatif_id' => 8,
                'kriteria_id' => 2,
                'kirteria_nilai_id' => 9,
                'nilai' => 45,
                'created_at' => '2023-07-01 19:34:47',
                'updated_at' => '2023-07-01 19:34:47',
            ),
            30 => 
            array (
                'id' => 31,
                'alternatif_id' => 8,
                'kriteria_id' => 3,
                'kirteria_nilai_id' => 12,
                'nilai' => 90,
                'created_at' => '2023-07-01 19:34:47',
                'updated_at' => '2023-07-01 19:34:47',
            ),
            31 => 
            array (
                'id' => 32,
                'alternatif_id' => 8,
                'kriteria_id' => 4,
                'kirteria_nilai_id' => 17,
                'nilai' => 2223,
                'created_at' => '2023-07-01 19:34:47',
                'updated_at' => '2023-07-01 19:34:47',
            ),
            32 => 
            array (
                'id' => 33,
                'alternatif_id' => 9,
                'kriteria_id' => 1,
                'kirteria_nilai_id' => 3,
                'nilai' => 20000,
                'created_at' => '2023-07-01 19:34:47',
                'updated_at' => '2023-07-01 19:34:47',
            ),
            33 => 
            array (
                'id' => 34,
                'alternatif_id' => 9,
                'kriteria_id' => 2,
                'kirteria_nilai_id' => 9,
                'nilai' => 47,
                'created_at' => '2023-07-01 19:34:47',
                'updated_at' => '2023-07-01 19:34:47',
            ),
            34 => 
            array (
                'id' => 35,
                'alternatif_id' => 9,
                'kriteria_id' => 3,
                'kirteria_nilai_id' => 12,
                'nilai' => 90,
                'created_at' => '2023-07-01 19:34:47',
                'updated_at' => '2023-07-01 19:34:47',
            ),
            35 => 
            array (
                'id' => 36,
                'alternatif_id' => 9,
                'kriteria_id' => 4,
                'kirteria_nilai_id' => 17,
                'nilai' => 1994,
                'created_at' => '2023-07-01 19:34:47',
                'updated_at' => '2023-07-01 19:34:47',
            ),
            36 => 
            array (
                'id' => 37,
                'alternatif_id' => 10,
                'kriteria_id' => 1,
                'kirteria_nilai_id' => 1,
                'nilai' => 10000,
                'created_at' => '2023-07-01 19:34:47',
                'updated_at' => '2023-07-01 19:34:47',
            ),
            37 => 
            array (
                'id' => 38,
                'alternatif_id' => 10,
                'kriteria_id' => 2,
                'kirteria_nilai_id' => 7,
                'nilai' => 25,
                'created_at' => '2023-07-01 19:34:47',
                'updated_at' => '2023-07-01 19:34:47',
            ),
            38 => 
            array (
                'id' => 39,
                'alternatif_id' => 10,
                'kriteria_id' => 3,
                'kirteria_nilai_id' => 11,
                'nilai' => 60,
                'created_at' => '2023-07-01 19:34:47',
                'updated_at' => '2023-07-01 19:34:47',
            ),
            39 => 
            array (
                'id' => 40,
                'alternatif_id' => 10,
                'kriteria_id' => 4,
                'kirteria_nilai_id' => 16,
                'nilai' => 1408,
                'created_at' => '2023-07-01 19:34:47',
                'updated_at' => '2023-07-01 19:34:47',
            ),
        ));
        
        
    }
}
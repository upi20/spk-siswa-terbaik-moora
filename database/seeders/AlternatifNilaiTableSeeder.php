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
                'id' => 93,
                'alternatif_id' => 21,
                'kriteria_id' => 1,
                'kirteria_nilai_id' => 1,
                'nilai' => 10000,
                'created_at' => '2023-07-01 22:45:45',
                'updated_at' => '2023-07-01 22:45:45',
            ),
            1 => 
            array (
                'id' => 94,
                'alternatif_id' => 21,
                'kriteria_id' => 2,
                'kirteria_nilai_id' => 7,
                'nilai' => 22,
                'created_at' => '2023-07-01 22:45:45',
                'updated_at' => '2023-07-01 22:45:45',
            ),
            2 => 
            array (
                'id' => 95,
                'alternatif_id' => 21,
                'kriteria_id' => 3,
                'kirteria_nilai_id' => 12,
                'nilai' => 90,
                'created_at' => '2023-07-01 22:45:45',
                'updated_at' => '2023-07-01 22:45:45',
            ),
            3 => 
            array (
                'id' => 96,
                'alternatif_id' => 21,
                'kriteria_id' => 4,
                'kirteria_nilai_id' => 17,
                'nilai' => 2064,
                'created_at' => '2023-07-01 22:45:45',
                'updated_at' => '2023-07-01 22:45:45',
            ),
            4 => 
            array (
                'id' => 97,
                'alternatif_id' => 22,
                'kriteria_id' => 1,
                'kirteria_nilai_id' => 4,
                'nilai' => 25000,
                'created_at' => '2023-07-01 22:45:45',
                'updated_at' => '2023-07-01 22:45:45',
            ),
            5 => 
            array (
                'id' => 98,
                'alternatif_id' => 22,
                'kriteria_id' => 2,
                'kirteria_nilai_id' => 7,
                'nilai' => 16,
                'created_at' => '2023-07-01 22:45:45',
                'updated_at' => '2023-07-01 22:45:45',
            ),
            6 => 
            array (
                'id' => 99,
                'alternatif_id' => 22,
                'kriteria_id' => 3,
                'kirteria_nilai_id' => 11,
                'nilai' => 60,
                'created_at' => '2023-07-01 22:45:45',
                'updated_at' => '2023-07-01 22:45:45',
            ),
            7 => 
            array (
                'id' => 100,
                'alternatif_id' => 22,
                'kriteria_id' => 4,
                'kirteria_nilai_id' => 16,
                'nilai' => 1587,
                'created_at' => '2023-07-01 22:45:45',
                'updated_at' => '2023-07-01 22:45:45',
            ),
            8 => 
            array (
                'id' => 101,
                'alternatif_id' => 23,
                'kriteria_id' => 1,
                'kirteria_nilai_id' => 1,
                'nilai' => 10000,
                'created_at' => '2023-07-01 22:45:45',
                'updated_at' => '2023-07-01 22:45:45',
            ),
            9 => 
            array (
                'id' => 102,
                'alternatif_id' => 23,
                'kriteria_id' => 2,
                'kirteria_nilai_id' => 8,
                'nilai' => 28,
                'created_at' => '2023-07-01 22:45:45',
                'updated_at' => '2023-07-01 22:45:45',
            ),
            10 => 
            array (
                'id' => 103,
                'alternatif_id' => 23,
                'kriteria_id' => 3,
                'kirteria_nilai_id' => 12,
                'nilai' => 90,
                'created_at' => '2023-07-01 22:45:45',
                'updated_at' => '2023-07-01 22:45:45',
            ),
            11 => 
            array (
                'id' => 104,
                'alternatif_id' => 23,
                'kriteria_id' => 4,
                'kirteria_nilai_id' => 17,
                'nilai' => 2208,
                'created_at' => '2023-07-01 22:45:45',
                'updated_at' => '2023-07-01 22:45:45',
            ),
            12 => 
            array (
                'id' => 105,
                'alternatif_id' => 24,
                'kriteria_id' => 1,
                'kirteria_nilai_id' => 2,
                'nilai' => 15000,
                'created_at' => '2023-07-01 22:45:45',
                'updated_at' => '2023-07-01 22:45:45',
            ),
            13 => 
            array (
                'id' => 106,
                'alternatif_id' => 24,
                'kriteria_id' => 2,
                'kirteria_nilai_id' => 10,
                'nilai' => 58,
                'created_at' => '2023-07-01 22:45:45',
                'updated_at' => '2023-07-01 22:45:45',
            ),
            14 => 
            array (
                'id' => 107,
                'alternatif_id' => 24,
                'kriteria_id' => 3,
                'kirteria_nilai_id' => 13,
                'nilai' => 110,
                'created_at' => '2023-07-01 22:45:45',
                'updated_at' => '2023-07-01 22:45:45',
            ),
            15 => 
            array (
                'id' => 108,
                'alternatif_id' => 24,
                'kriteria_id' => 4,
                'kirteria_nilai_id' => 17,
                'nilai' => 1824,
                'created_at' => '2023-07-01 22:45:45',
                'updated_at' => '2023-07-01 22:45:45',
            ),
            16 => 
            array (
                'id' => 109,
                'alternatif_id' => 25,
                'kriteria_id' => 1,
                'kirteria_nilai_id' => 3,
                'nilai' => 20000,
                'created_at' => '2023-07-01 22:45:45',
                'updated_at' => '2023-07-01 22:45:45',
            ),
            17 => 
            array (
                'id' => 110,
                'alternatif_id' => 25,
                'kriteria_id' => 2,
                'kirteria_nilai_id' => 8,
                'nilai' => 39,
                'created_at' => '2023-07-01 22:45:45',
                'updated_at' => '2023-07-01 22:45:45',
            ),
            18 => 
            array (
                'id' => 111,
                'alternatif_id' => 25,
                'kriteria_id' => 3,
                'kirteria_nilai_id' => 12,
                'nilai' => 90,
                'created_at' => '2023-07-01 22:45:45',
                'updated_at' => '2023-07-01 22:45:45',
            ),
            19 => 
            array (
                'id' => 112,
                'alternatif_id' => 25,
                'kriteria_id' => 4,
                'kirteria_nilai_id' => 16,
                'nilai' => 1650,
                'created_at' => '2023-07-01 22:45:45',
                'updated_at' => '2023-07-01 22:45:45',
            ),
            20 => 
            array (
                'id' => 117,
                'alternatif_id' => 27,
                'kriteria_id' => 1,
                'kirteria_nilai_id' => 5,
                'nilai' => 30000,
                'created_at' => '2023-07-01 22:45:46',
                'updated_at' => '2023-07-01 22:45:46',
            ),
            21 => 
            array (
                'id' => 118,
                'alternatif_id' => 27,
                'kriteria_id' => 2,
                'kirteria_nilai_id' => 10,
                'nilai' => 56,
                'created_at' => '2023-07-01 22:45:46',
                'updated_at' => '2023-07-01 22:45:46',
            ),
            22 => 
            array (
                'id' => 119,
                'alternatif_id' => 27,
                'kriteria_id' => 3,
                'kirteria_nilai_id' => 13,
                'nilai' => 105,
                'created_at' => '2023-07-01 22:45:46',
                'updated_at' => '2023-07-01 22:45:46',
            ),
            23 => 
            array (
                'id' => 120,
                'alternatif_id' => 27,
                'kriteria_id' => 4,
                'kirteria_nilai_id' => 18,
                'nilai' => 2434,
                'created_at' => '2023-07-01 22:45:46',
                'updated_at' => '2023-07-01 22:45:46',
            ),
            24 => 
            array (
                'id' => 121,
                'alternatif_id' => 28,
                'kriteria_id' => 1,
                'kirteria_nilai_id' => 5,
                'nilai' => 35000,
                'created_at' => '2023-07-01 22:45:46',
                'updated_at' => '2023-07-01 22:45:46',
            ),
            25 => 
            array (
                'id' => 122,
                'alternatif_id' => 28,
                'kriteria_id' => 2,
                'kirteria_nilai_id' => 9,
                'nilai' => 45,
                'created_at' => '2023-07-01 22:45:46',
                'updated_at' => '2023-07-01 22:45:46',
            ),
            26 => 
            array (
                'id' => 123,
                'alternatif_id' => 28,
                'kriteria_id' => 3,
                'kirteria_nilai_id' => 12,
                'nilai' => 90,
                'created_at' => '2023-07-01 22:45:46',
                'updated_at' => '2023-07-01 22:45:46',
            ),
            27 => 
            array (
                'id' => 124,
                'alternatif_id' => 28,
                'kriteria_id' => 4,
                'kirteria_nilai_id' => 17,
                'nilai' => 2223,
                'created_at' => '2023-07-01 22:45:46',
                'updated_at' => '2023-07-01 22:45:46',
            ),
            28 => 
            array (
                'id' => 125,
                'alternatif_id' => 29,
                'kriteria_id' => 1,
                'kirteria_nilai_id' => 3,
                'nilai' => 20000,
                'created_at' => '2023-07-01 22:45:46',
                'updated_at' => '2023-07-01 22:45:46',
            ),
            29 => 
            array (
                'id' => 126,
                'alternatif_id' => 29,
                'kriteria_id' => 2,
                'kirteria_nilai_id' => 9,
                'nilai' => 47,
                'created_at' => '2023-07-01 22:45:46',
                'updated_at' => '2023-07-01 22:45:46',
            ),
            30 => 
            array (
                'id' => 127,
                'alternatif_id' => 29,
                'kriteria_id' => 3,
                'kirteria_nilai_id' => 12,
                'nilai' => 90,
                'created_at' => '2023-07-01 22:45:46',
                'updated_at' => '2023-07-01 22:45:46',
            ),
            31 => 
            array (
                'id' => 128,
                'alternatif_id' => 29,
                'kriteria_id' => 4,
                'kirteria_nilai_id' => 17,
                'nilai' => 1994,
                'created_at' => '2023-07-01 22:45:46',
                'updated_at' => '2023-07-01 22:45:46',
            ),
            32 => 
            array (
                'id' => 129,
                'alternatif_id' => 30,
                'kriteria_id' => 1,
                'kirteria_nilai_id' => 1,
                'nilai' => 10000,
                'created_at' => '2023-07-01 22:45:46',
                'updated_at' => '2023-07-01 22:45:46',
            ),
            33 => 
            array (
                'id' => 130,
                'alternatif_id' => 30,
                'kriteria_id' => 2,
                'kirteria_nilai_id' => 7,
                'nilai' => 25,
                'created_at' => '2023-07-01 22:45:46',
                'updated_at' => '2023-07-01 22:45:46',
            ),
            34 => 
            array (
                'id' => 131,
                'alternatif_id' => 30,
                'kriteria_id' => 3,
                'kirteria_nilai_id' => 11,
                'nilai' => 60,
                'created_at' => '2023-07-01 22:45:46',
                'updated_at' => '2023-07-01 22:45:46',
            ),
            35 => 
            array (
                'id' => 132,
                'alternatif_id' => 30,
                'kriteria_id' => 4,
                'kirteria_nilai_id' => 16,
                'nilai' => 1408,
                'created_at' => '2023-07-01 22:45:46',
                'updated_at' => '2023-07-01 22:45:46',
            ),
            36 => 
            array (
                'id' => 133,
                'alternatif_id' => 26,
                'kriteria_id' => 1,
                'kirteria_nilai_id' => 2,
                'nilai' => 15000,
                'created_at' => '2023-07-01 23:05:05',
                'updated_at' => '2023-07-01 23:05:05',
            ),
            37 => 
            array (
                'id' => 134,
                'alternatif_id' => 26,
                'kriteria_id' => 2,
                'kirteria_nilai_id' => 9,
                'nilai' => 46,
                'created_at' => '2023-07-01 23:05:05',
                'updated_at' => '2023-07-01 23:05:05',
            ),
            38 => 
            array (
                'id' => 135,
                'alternatif_id' => 26,
                'kriteria_id' => 3,
                'kirteria_nilai_id' => 14,
                'nilai' => 130,
                'created_at' => '2023-07-01 23:05:05',
                'updated_at' => '2023-07-01 23:05:05',
            ),
            39 => 
            array (
                'id' => 136,
                'alternatif_id' => 26,
                'kriteria_id' => 4,
                'kirteria_nilai_id' => 17,
                'nilai' => 2194,
                'created_at' => '2023-07-01 23:05:05',
                'updated_at' => '2023-07-01 23:05:05',
            ),
        ));
        
        
    }
}
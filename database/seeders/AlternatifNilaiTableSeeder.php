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
                'id' => 137,
                'alternatif_id' => 31,
                'kriteria_id' => 1,
                'kirteria_nilai_id' => 2,
                'nilai' => 15000,
                'created_at' => '2023-07-01 23:16:57',
                'updated_at' => '2023-07-01 23:16:57',
            ),
            1 => 
            array (
                'id' => 138,
                'alternatif_id' => 31,
                'kriteria_id' => 2,
                'kirteria_nilai_id' => 7,
                'nilai' => 22,
                'created_at' => '2023-07-01 23:16:57',
                'updated_at' => '2023-07-01 23:16:57',
            ),
            2 => 
            array (
                'id' => 139,
                'alternatif_id' => 31,
                'kriteria_id' => 3,
                'kirteria_nilai_id' => 12,
                'nilai' => 90,
                'created_at' => '2023-07-01 23:16:57',
                'updated_at' => '2023-07-01 23:16:57',
            ),
            3 => 
            array (
                'id' => 140,
                'alternatif_id' => 31,
                'kriteria_id' => 4,
                'kirteria_nilai_id' => 17,
                'nilai' => 2064,
                'created_at' => '2023-07-01 23:16:57',
                'updated_at' => '2023-07-01 23:16:57',
            ),
            4 => 
            array (
                'id' => 141,
                'alternatif_id' => 32,
                'kriteria_id' => 1,
                'kirteria_nilai_id' => 4,
                'nilai' => 25000,
                'created_at' => '2023-07-01 23:16:57',
                'updated_at' => '2023-07-01 23:16:57',
            ),
            5 => 
            array (
                'id' => 142,
                'alternatif_id' => 32,
                'kriteria_id' => 2,
                'kirteria_nilai_id' => 7,
                'nilai' => 16,
                'created_at' => '2023-07-01 23:16:57',
                'updated_at' => '2023-07-01 23:16:57',
            ),
            6 => 
            array (
                'id' => 143,
                'alternatif_id' => 32,
                'kriteria_id' => 3,
                'kirteria_nilai_id' => 11,
                'nilai' => 60,
                'created_at' => '2023-07-01 23:16:57',
                'updated_at' => '2023-07-01 23:16:57',
            ),
            7 => 
            array (
                'id' => 144,
                'alternatif_id' => 32,
                'kriteria_id' => 4,
                'kirteria_nilai_id' => 16,
                'nilai' => 1587,
                'created_at' => '2023-07-01 23:16:57',
                'updated_at' => '2023-07-01 23:16:57',
            ),
            8 => 
            array (
                'id' => 145,
                'alternatif_id' => 33,
                'kriteria_id' => 1,
                'kirteria_nilai_id' => 1,
                'nilai' => 10000,
                'created_at' => '2023-07-01 23:16:57',
                'updated_at' => '2023-07-01 23:16:57',
            ),
            9 => 
            array (
                'id' => 146,
                'alternatif_id' => 33,
                'kriteria_id' => 2,
                'kirteria_nilai_id' => 8,
                'nilai' => 28,
                'created_at' => '2023-07-01 23:16:57',
                'updated_at' => '2023-07-01 23:16:57',
            ),
            10 => 
            array (
                'id' => 147,
                'alternatif_id' => 33,
                'kriteria_id' => 3,
                'kirteria_nilai_id' => 12,
                'nilai' => 90,
                'created_at' => '2023-07-01 23:16:57',
                'updated_at' => '2023-07-01 23:16:57',
            ),
            11 => 
            array (
                'id' => 148,
                'alternatif_id' => 33,
                'kriteria_id' => 4,
                'kirteria_nilai_id' => 17,
                'nilai' => 2208,
                'created_at' => '2023-07-01 23:16:57',
                'updated_at' => '2023-07-01 23:16:57',
            ),
            12 => 
            array (
                'id' => 149,
                'alternatif_id' => 34,
                'kriteria_id' => 1,
                'kirteria_nilai_id' => 2,
                'nilai' => 15000,
                'created_at' => '2023-07-01 23:16:57',
                'updated_at' => '2023-07-01 23:16:57',
            ),
            13 => 
            array (
                'id' => 150,
                'alternatif_id' => 34,
                'kriteria_id' => 2,
                'kirteria_nilai_id' => 10,
                'nilai' => 58,
                'created_at' => '2023-07-01 23:16:57',
                'updated_at' => '2023-07-01 23:16:57',
            ),
            14 => 
            array (
                'id' => 151,
                'alternatif_id' => 34,
                'kriteria_id' => 3,
                'kirteria_nilai_id' => 13,
                'nilai' => 110,
                'created_at' => '2023-07-01 23:16:57',
                'updated_at' => '2023-07-01 23:16:57',
            ),
            15 => 
            array (
                'id' => 152,
                'alternatif_id' => 34,
                'kriteria_id' => 4,
                'kirteria_nilai_id' => 17,
                'nilai' => 1824,
                'created_at' => '2023-07-01 23:16:57',
                'updated_at' => '2023-07-01 23:16:57',
            ),
            16 => 
            array (
                'id' => 153,
                'alternatif_id' => 35,
                'kriteria_id' => 1,
                'kirteria_nilai_id' => 3,
                'nilai' => 20000,
                'created_at' => '2023-07-01 23:16:57',
                'updated_at' => '2023-07-01 23:16:57',
            ),
            17 => 
            array (
                'id' => 154,
                'alternatif_id' => 35,
                'kriteria_id' => 2,
                'kirteria_nilai_id' => 8,
                'nilai' => 39,
                'created_at' => '2023-07-01 23:16:57',
                'updated_at' => '2023-07-01 23:16:57',
            ),
            18 => 
            array (
                'id' => 155,
                'alternatif_id' => 35,
                'kriteria_id' => 3,
                'kirteria_nilai_id' => 12,
                'nilai' => 90,
                'created_at' => '2023-07-01 23:16:58',
                'updated_at' => '2023-07-01 23:16:58',
            ),
            19 => 
            array (
                'id' => 156,
                'alternatif_id' => 35,
                'kriteria_id' => 4,
                'kirteria_nilai_id' => 16,
                'nilai' => 1650,
                'created_at' => '2023-07-01 23:16:58',
                'updated_at' => '2023-07-01 23:16:58',
            ),
            20 => 
            array (
                'id' => 157,
                'alternatif_id' => 36,
                'kriteria_id' => 1,
                'kirteria_nilai_id' => 2,
                'nilai' => 15000,
                'created_at' => '2023-07-01 23:16:58',
                'updated_at' => '2023-07-01 23:16:58',
            ),
            21 => 
            array (
                'id' => 158,
                'alternatif_id' => 36,
                'kriteria_id' => 2,
                'kirteria_nilai_id' => 9,
                'nilai' => 46,
                'created_at' => '2023-07-01 23:16:58',
                'updated_at' => '2023-07-01 23:16:58',
            ),
            22 => 
            array (
                'id' => 159,
                'alternatif_id' => 36,
                'kriteria_id' => 3,
                'kirteria_nilai_id' => 14,
                'nilai' => 130,
                'created_at' => '2023-07-01 23:16:58',
                'updated_at' => '2023-07-01 23:16:58',
            ),
            23 => 
            array (
                'id' => 160,
                'alternatif_id' => 36,
                'kriteria_id' => 4,
                'kirteria_nilai_id' => 17,
                'nilai' => 2194,
                'created_at' => '2023-07-01 23:16:58',
                'updated_at' => '2023-07-01 23:16:58',
            ),
            24 => 
            array (
                'id' => 161,
                'alternatif_id' => 37,
                'kriteria_id' => 1,
                'kirteria_nilai_id' => 5,
                'nilai' => 30000,
                'created_at' => '2023-07-01 23:16:58',
                'updated_at' => '2023-07-01 23:16:58',
            ),
            25 => 
            array (
                'id' => 162,
                'alternatif_id' => 37,
                'kriteria_id' => 2,
                'kirteria_nilai_id' => 10,
                'nilai' => 56,
                'created_at' => '2023-07-01 23:16:58',
                'updated_at' => '2023-07-01 23:16:58',
            ),
            26 => 
            array (
                'id' => 163,
                'alternatif_id' => 37,
                'kriteria_id' => 3,
                'kirteria_nilai_id' => 13,
                'nilai' => 105,
                'created_at' => '2023-07-01 23:16:58',
                'updated_at' => '2023-07-01 23:16:58',
            ),
            27 => 
            array (
                'id' => 164,
                'alternatif_id' => 37,
                'kriteria_id' => 4,
                'kirteria_nilai_id' => 18,
                'nilai' => 2434,
                'created_at' => '2023-07-01 23:16:58',
                'updated_at' => '2023-07-01 23:16:58',
            ),
            28 => 
            array (
                'id' => 165,
                'alternatif_id' => 38,
                'kriteria_id' => 1,
                'kirteria_nilai_id' => 5,
                'nilai' => 35000,
                'created_at' => '2023-07-01 23:16:58',
                'updated_at' => '2023-07-01 23:16:58',
            ),
            29 => 
            array (
                'id' => 166,
                'alternatif_id' => 38,
                'kriteria_id' => 2,
                'kirteria_nilai_id' => 9,
                'nilai' => 45,
                'created_at' => '2023-07-01 23:16:58',
                'updated_at' => '2023-07-01 23:16:58',
            ),
            30 => 
            array (
                'id' => 167,
                'alternatif_id' => 38,
                'kriteria_id' => 3,
                'kirteria_nilai_id' => 12,
                'nilai' => 90,
                'created_at' => '2023-07-01 23:16:58',
                'updated_at' => '2023-07-01 23:16:58',
            ),
            31 => 
            array (
                'id' => 168,
                'alternatif_id' => 38,
                'kriteria_id' => 4,
                'kirteria_nilai_id' => 17,
                'nilai' => 2223,
                'created_at' => '2023-07-01 23:16:58',
                'updated_at' => '2023-07-01 23:16:58',
            ),
            32 => 
            array (
                'id' => 169,
                'alternatif_id' => 39,
                'kriteria_id' => 1,
                'kirteria_nilai_id' => 3,
                'nilai' => 20000,
                'created_at' => '2023-07-01 23:16:58',
                'updated_at' => '2023-07-01 23:16:58',
            ),
            33 => 
            array (
                'id' => 170,
                'alternatif_id' => 39,
                'kriteria_id' => 2,
                'kirteria_nilai_id' => 9,
                'nilai' => 47,
                'created_at' => '2023-07-01 23:16:58',
                'updated_at' => '2023-07-01 23:16:58',
            ),
            34 => 
            array (
                'id' => 171,
                'alternatif_id' => 39,
                'kriteria_id' => 3,
                'kirteria_nilai_id' => 12,
                'nilai' => 90,
                'created_at' => '2023-07-01 23:16:58',
                'updated_at' => '2023-07-01 23:16:58',
            ),
            35 => 
            array (
                'id' => 172,
                'alternatif_id' => 39,
                'kriteria_id' => 4,
                'kirteria_nilai_id' => 17,
                'nilai' => 1994,
                'created_at' => '2023-07-01 23:16:58',
                'updated_at' => '2023-07-01 23:16:58',
            ),
            36 => 
            array (
                'id' => 173,
                'alternatif_id' => 40,
                'kriteria_id' => 1,
                'kirteria_nilai_id' => 1,
                'nilai' => 10000,
                'created_at' => '2023-07-01 23:16:58',
                'updated_at' => '2023-07-01 23:16:58',
            ),
            37 => 
            array (
                'id' => 174,
                'alternatif_id' => 40,
                'kriteria_id' => 2,
                'kirteria_nilai_id' => 7,
                'nilai' => 25,
                'created_at' => '2023-07-01 23:16:58',
                'updated_at' => '2023-07-01 23:16:58',
            ),
            38 => 
            array (
                'id' => 175,
                'alternatif_id' => 40,
                'kriteria_id' => 3,
                'kirteria_nilai_id' => 11,
                'nilai' => 60,
                'created_at' => '2023-07-01 23:16:58',
                'updated_at' => '2023-07-01 23:16:58',
            ),
            39 => 
            array (
                'id' => 176,
                'alternatif_id' => 40,
                'kriteria_id' => 4,
                'kirteria_nilai_id' => 16,
                'nilai' => 1408,
                'created_at' => '2023-07-01 23:16:58',
                'updated_at' => '2023-07-01 23:16:58',
            ),
        ));
        
        
    }
}
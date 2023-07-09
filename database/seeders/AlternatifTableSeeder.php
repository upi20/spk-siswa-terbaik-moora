<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AlternatifTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('alternatif')->delete();

        \DB::table('alternatif')->insert(array(
            0 =>
            array(
                'id' => 31,
                'nama' => 'G. Burangrang',
                'slug' => 'g-burangrang',
                'kelas' => NULL,
                'import_id' => 19,
                'created_at' => '2023-07-01 23:16:57',
                'updated_at' => '2023-07-01 23:16:57',
            ),
            1 =>
            array(
                'id' => 32,
                'nama' => 'G. Putri Lembang',
                'slug' => 'g-putri-lembang',
                'kelas' => NULL,
                'import_id' => 19,
                'created_at' => '2023-07-01 23:16:57',
                'updated_at' => '2023-07-01 23:16:57',
            ),
            2 =>
            array(
                'id' => 33,
                'nama' => 'G. Bukit Tunggul',
                'slug' => 'g-bukit-tunggul',
                'kelas' => NULL,
                'import_id' => 19,
                'created_at' => '2023-07-01 23:16:57',
                'updated_at' => '2023-07-01 23:16:57',
            ),
            3 =>
            array(
                'id' => 34,
                'nama' => 'G. Manglayang',
                'slug' => 'g-manglayang',
                'kelas' => NULL,
                'import_id' => 19,
                'created_at' => '2023-07-01 23:16:57',
                'updated_at' => '2023-07-01 23:16:57',
            ),
            4 =>
            array(
                'id' => 35,
                'nama' => 'G. Mandalawangi',
                'slug' => 'g-mandalawangi',
                'kelas' => NULL,
                'import_id' => 19,
                'created_at' => '2023-07-01 23:16:57',
                'updated_at' => '2023-07-01 23:16:57',
            ),
            5 =>
            array(
                'id' => 36,
                'nama' => 'G. Artapela ',
                'slug' => 'g-artapela',
                'kelas' => NULL,
                'import_id' => 19,
                'created_at' => '2023-07-01 23:16:58',
                'updated_at' => '2023-07-01 23:16:58',
            ),
            6 =>
            array(
                'id' => 37,
                'nama' => 'G. Patuha',
                'slug' => 'g-patuha',
                'kelas' => NULL,
                'import_id' => 19,
                'created_at' => '2023-07-01 23:16:58',
                'updated_at' => '2023-07-01 23:16:58',
            ),
            7 =>
            array(
                'id' => 38,
                'nama' => 'G. Puntang',
                'slug' => 'g-puntang',
                'kelas' => NULL,
                'import_id' => 19,
                'created_at' => '2023-07-01 23:16:58',
                'updated_at' => '2023-07-01 23:16:58',
            ),
            8 =>
            array(
                'id' => 39,
                'nama' => 'G. Tambakruyung',
                'slug' => 'g-tambakruyung',
                'kelas' => NULL,
                'import_id' => 19,
                'created_at' => '2023-07-01 23:16:58',
                'updated_at' => '2023-07-01 23:16:58',
            ),
            9 =>
            array(
                'id' => 40,
                'nama' => 'G. Bendera',
                'slug' => 'g-bendera',
                'kelas' => NULL,
                'import_id' => 19,
                'created_at' => '2023-07-01 23:16:58',
                'updated_at' => '2023-07-01 23:16:58',
            ),
        ));
    }
}

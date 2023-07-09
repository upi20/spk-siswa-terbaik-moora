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

        \DB::table('kriteria')->insert(array(
            0 =>
            array(
                'id' => 1,
                'bobot' => 40,
                'jenis' => 'Cost',
                'nama' => 'Biaya',
                'slug' => 'biaya',
                'kode' => 'C1',

                'dari' => 10000,
                'sampai' => 35000,
                'created_at' => '2023-07-01 16:01:00',
                'updated_at' => '2023-07-01 18:57:00',
            ),
            1 =>
            array(
                'id' => 2,
                'bobot' => 25,
                'jenis' => 'Benefit',
                'nama' => 'Jarak',
                'slug' => 'jarak',
                'kode' => 'C2',

                'dari' => 11,
                'sampai' => 70,
                'created_at' => '2023-07-01 16:01:18',
                'updated_at' => '2023-07-01 18:57:13',
            ),
            2 =>
            array(
                'id' => 3,
                'bobot' => 20,
                'jenis' => 'Benefit',
                'nama' => 'Waktu',
                'slug' => 'waktu',
                'kode' => 'C3',

                'dari' => 30,
                'sampai' => 150,
                'created_at' => '2023-07-01 16:01:32',
                'updated_at' => '2023-07-01 18:57:23',
            ),
            3 =>
            array(
                'id' => 4,
                'bobot' => 15,
                'jenis' => 'Benefit',
                'nama' => 'Ketinggian',
                'slug' => 'ketinggian',
                'kode' => 'C4',

                'dari' => 601,
                'sampai' => 3000,
                'created_at' => '2023-07-01 16:01:48',
                'updated_at' => '2023-07-01 18:57:36',
            ),
        ));
    }
}

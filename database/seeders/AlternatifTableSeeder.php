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
        
        \DB::table('alternatif')->insert(array (
            0 => 
            array (
                'id' => 11,
                'nama' => 'G. Burangrang',
                'slug' => 'g-burangrang',
                'alamat' => NULL,
                'deskripsi' => NULL,
                'import_id' => 17,
                'created_at' => '2023-07-01 20:24:06',
                'updated_at' => '2023-07-01 20:24:06',
            ),
            1 => 
            array (
                'id' => 12,
                'nama' => 'G. Putri Lembang',
                'slug' => 'g-putri-lembang',
                'alamat' => NULL,
                'deskripsi' => NULL,
                'import_id' => 17,
                'created_at' => '2023-07-01 20:24:06',
                'updated_at' => '2023-07-01 20:24:06',
            ),
            2 => 
            array (
                'id' => 13,
                'nama' => 'G. Bukit Tunggul',
                'slug' => 'g-bukit-tunggul',
                'alamat' => NULL,
                'deskripsi' => NULL,
                'import_id' => 17,
                'created_at' => '2023-07-01 20:24:06',
                'updated_at' => '2023-07-01 20:24:06',
            ),
            3 => 
            array (
                'id' => 14,
                'nama' => 'G. Manglayang',
                'slug' => 'g-manglayang',
                'alamat' => NULL,
                'deskripsi' => NULL,
                'import_id' => 17,
                'created_at' => '2023-07-01 20:24:06',
                'updated_at' => '2023-07-01 20:24:06',
            ),
            4 => 
            array (
                'id' => 15,
                'nama' => 'G. Mandalawangi',
                'slug' => 'g-mandalawangi',
                'alamat' => NULL,
                'deskripsi' => NULL,
                'import_id' => 17,
                'created_at' => '2023-07-01 20:24:06',
                'updated_at' => '2023-07-01 20:24:06',
            ),
            5 => 
            array (
                'id' => 16,
                'nama' => 'G. Artapela ',
                'slug' => 'g-artapela',
                'alamat' => NULL,
                'deskripsi' => NULL,
                'import_id' => 17,
                'created_at' => '2023-07-01 20:24:06',
                'updated_at' => '2023-07-01 20:24:06',
            ),
            6 => 
            array (
                'id' => 17,
                'nama' => 'G. Patuha',
                'slug' => 'g-patuha',
                'alamat' => NULL,
                'deskripsi' => NULL,
                'import_id' => 17,
                'created_at' => '2023-07-01 20:24:06',
                'updated_at' => '2023-07-01 20:24:06',
            ),
            7 => 
            array (
                'id' => 18,
                'nama' => 'G. Puntang',
                'slug' => 'g-puntang',
                'alamat' => NULL,
                'deskripsi' => NULL,
                'import_id' => 17,
                'created_at' => '2023-07-01 20:24:06',
                'updated_at' => '2023-07-01 20:24:06',
            ),
            8 => 
            array (
                'id' => 19,
                'nama' => 'G. Tambakruyung',
                'slug' => 'g-tambakruyung',
                'alamat' => NULL,
                'deskripsi' => NULL,
                'import_id' => 17,
                'created_at' => '2023-07-01 20:24:06',
                'updated_at' => '2023-07-01 20:24:06',
            ),
            9 => 
            array (
                'id' => 20,
                'nama' => 'G. Bendera',
                'slug' => 'g-bendera',
                'alamat' => NULL,
                'deskripsi' => NULL,
                'import_id' => 17,
                'created_at' => '2023-07-01 20:24:06',
                'updated_at' => '2023-07-01 20:24:06',
            ),
        ));
        
        
    }
}
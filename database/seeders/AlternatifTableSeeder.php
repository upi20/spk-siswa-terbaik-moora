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
                'id' => 1,
                'nama' => 'G. Burangrang',
                'slug' => 'g-burangrang',
                'alamat' => NULL,
                'deskripsi' => NULL,
                'import_id' => 16,
                'created_at' => '2023-07-01 19:34:47',
                'updated_at' => '2023-07-01 19:34:47',
            ),
            1 => 
            array (
                'id' => 2,
                'nama' => 'G. Putri Lembang',
                'slug' => 'g-putri-lembang',
                'alamat' => NULL,
                'deskripsi' => NULL,
                'import_id' => 16,
                'created_at' => '2023-07-01 19:34:47',
                'updated_at' => '2023-07-01 19:34:47',
            ),
            2 => 
            array (
                'id' => 3,
                'nama' => 'G. Bukit Tunggul',
                'slug' => 'g-bukit-tunggul',
                'alamat' => NULL,
                'deskripsi' => NULL,
                'import_id' => 16,
                'created_at' => '2023-07-01 19:34:47',
                'updated_at' => '2023-07-01 19:34:47',
            ),
            3 => 
            array (
                'id' => 4,
                'nama' => 'G. Manglayang',
                'slug' => 'g-manglayang',
                'alamat' => NULL,
                'deskripsi' => NULL,
                'import_id' => 16,
                'created_at' => '2023-07-01 19:34:47',
                'updated_at' => '2023-07-01 19:34:47',
            ),
            4 => 
            array (
                'id' => 5,
                'nama' => 'G. Mandalawangi',
                'slug' => 'g-mandalawangi',
                'alamat' => NULL,
                'deskripsi' => NULL,
                'import_id' => 16,
                'created_at' => '2023-07-01 19:34:47',
                'updated_at' => '2023-07-01 19:34:47',
            ),
            5 => 
            array (
                'id' => 6,
                'nama' => 'G. Artapela ',
                'slug' => 'g-artapela',
                'alamat' => NULL,
                'deskripsi' => NULL,
                'import_id' => 16,
                'created_at' => '2023-07-01 19:34:47',
                'updated_at' => '2023-07-01 19:34:47',
            ),
            6 => 
            array (
                'id' => 7,
                'nama' => 'G. Patuha',
                'slug' => 'g-patuha',
                'alamat' => NULL,
                'deskripsi' => NULL,
                'import_id' => 16,
                'created_at' => '2023-07-01 19:34:47',
                'updated_at' => '2023-07-01 19:34:47',
            ),
            7 => 
            array (
                'id' => 8,
                'nama' => 'G. Puntang',
                'slug' => 'g-puntang',
                'alamat' => NULL,
                'deskripsi' => NULL,
                'import_id' => 16,
                'created_at' => '2023-07-01 19:34:47',
                'updated_at' => '2023-07-01 19:34:47',
            ),
            8 => 
            array (
                'id' => 9,
                'nama' => 'G. Tambakruyung',
                'slug' => 'g-tambakruyung',
                'alamat' => NULL,
                'deskripsi' => NULL,
                'import_id' => 16,
                'created_at' => '2023-07-01 19:34:47',
                'updated_at' => '2023-07-01 19:34:47',
            ),
            9 => 
            array (
                'id' => 10,
                'nama' => 'G. Bendera',
                'slug' => 'g-bendera',
                'alamat' => NULL,
                'deskripsi' => NULL,
                'import_id' => 16,
                'created_at' => '2023-07-01 19:34:47',
                'updated_at' => '2023-07-01 19:34:47',
            ),
        ));
        
        
    }
}
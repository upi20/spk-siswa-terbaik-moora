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
                'id' => 21,
                'nama' => 'G. Burangrang',
                'slug' => 'g-burangrang',
                'alamat' => NULL,
                'deskripsi' => NULL,
                'import_id' => 18,
                'created_at' => '2023-07-01 22:45:45',
                'updated_at' => '2023-07-01 22:45:45',
            ),
            1 => 
            array (
                'id' => 22,
                'nama' => 'G. Putri Lembang',
                'slug' => 'g-putri-lembang',
                'alamat' => NULL,
                'deskripsi' => NULL,
                'import_id' => 18,
                'created_at' => '2023-07-01 22:45:45',
                'updated_at' => '2023-07-01 22:45:45',
            ),
            2 => 
            array (
                'id' => 23,
                'nama' => 'G. Bukit Tunggul',
                'slug' => 'g-bukit-tunggul',
                'alamat' => NULL,
                'deskripsi' => NULL,
                'import_id' => 18,
                'created_at' => '2023-07-01 22:45:45',
                'updated_at' => '2023-07-01 22:45:45',
            ),
            3 => 
            array (
                'id' => 24,
                'nama' => 'G. Manglayang',
                'slug' => 'g-manglayang',
                'alamat' => NULL,
                'deskripsi' => NULL,
                'import_id' => 18,
                'created_at' => '2023-07-01 22:45:45',
                'updated_at' => '2023-07-01 22:45:45',
            ),
            4 => 
            array (
                'id' => 25,
                'nama' => 'G. Mandalawangi',
                'slug' => 'g-mandalawangi',
                'alamat' => NULL,
                'deskripsi' => NULL,
                'import_id' => 18,
                'created_at' => '2023-07-01 22:45:45',
                'updated_at' => '2023-07-01 22:45:45',
            ),
            5 => 
            array (
                'id' => 26,
                'nama' => 'G. Artapela ',
                'slug' => 'g-artapela',
                'alamat' => NULL,
                'deskripsi' => NULL,
                'import_id' => 18,
                'created_at' => '2023-07-01 22:45:45',
                'updated_at' => '2023-07-01 22:45:45',
            ),
            6 => 
            array (
                'id' => 27,
                'nama' => 'G. Patuha',
                'slug' => 'g-patuha',
                'alamat' => NULL,
                'deskripsi' => NULL,
                'import_id' => 18,
                'created_at' => '2023-07-01 22:45:46',
                'updated_at' => '2023-07-01 22:45:46',
            ),
            7 => 
            array (
                'id' => 28,
                'nama' => 'G. Puntang',
                'slug' => 'g-puntang',
                'alamat' => NULL,
                'deskripsi' => NULL,
                'import_id' => 18,
                'created_at' => '2023-07-01 22:45:46',
                'updated_at' => '2023-07-01 22:45:46',
            ),
            8 => 
            array (
                'id' => 29,
                'nama' => 'G. Tambakruyung',
                'slug' => 'g-tambakruyung',
                'alamat' => NULL,
                'deskripsi' => NULL,
                'import_id' => 18,
                'created_at' => '2023-07-01 22:45:46',
                'updated_at' => '2023-07-01 22:45:46',
            ),
            9 => 
            array (
                'id' => 30,
                'nama' => 'G. Bendera',
                'slug' => 'g-bendera',
                'alamat' => NULL,
                'deskripsi' => NULL,
                'import_id' => 18,
                'created_at' => '2023-07-01 22:45:46',
                'updated_at' => '2023-07-01 22:45:46',
            ),
        ));
        
        
    }
}
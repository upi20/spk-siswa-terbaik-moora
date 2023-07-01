<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PMenuTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('p_menu')->delete();
        
        \DB::table('p_menu')->insert(array (
            0 => 
            array (
                'id' => 345,
                'parent_id' => NULL,
                'title' => 'Dashboard',
                'icon' => 'fas fa-tachometer-alt',
                'route' => 'admin.dashboard',
                'sequence' => 1,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2023-04-18 05:36:59',
            ),
            1 => 
            array (
                'id' => 346,
                'parent_id' => NULL,
                'title' => 'Pengguna',
                'icon' => 'fas fa-list',
                'route' => 'admin.user',
                'sequence' => 15,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2023-07-01 23:02:01',
            ),
            2 => 
            array (
                'id' => 361,
                'parent_id' => NULL,
                'title' => 'Menu Management',
                'icon' => 'fas fa-stream',
                'route' => 'admin.menu.admin',
                'sequence' => 16,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2023-07-01 23:02:01',
            ),
            3 => 
            array (
                'id' => 367,
                'parent_id' => NULL,
                'title' => 'Akses Pengguna',
                'icon' => 'fas fa-user-check',
                'route' => NULL,
                'sequence' => 12,
                'active' => 0,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2023-07-01 23:09:34',
            ),
            4 => 
            array (
                'id' => 368,
                'parent_id' => 367,
                'title' => 'Perizinan',
                'icon' => NULL,
                'route' => 'admin.user_access.permission',
                'sequence' => 13,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2023-07-01 23:02:01',
            ),
            5 => 
            array (
                'id' => 369,
                'parent_id' => 367,
                'title' => 'Sebagai',
                'icon' => NULL,
                'route' => 'admin.user_access.role',
                'sequence' => 14,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2023-07-01 23:02:01',
            ),
            6 => 
            array (
                'id' => 373,
                'parent_id' => NULL,
                'title' => 'Profile',
                'icon' => 'fas fa-user',
                'route' => 'admin.profile',
                'sequence' => 17,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2023-07-01 23:02:01',
            ),
            7 => 
            array (
                'id' => 386,
                'parent_id' => NULL,
                'title' => 'Logout',
                'icon' => 'fas fa-sign-out-alt',
                'route' => 'logout',
                'sequence' => 18,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:54:09',
                'updated_at' => '2023-07-01 23:02:01',
            ),
            8 => 
            array (
                'id' => 397,
                'parent_id' => NULL,
                'title' => 'Pengaturan',
                'icon' => 'fas fa-wrench',
                'route' => NULL,
                'sequence' => 9,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-14 21:10:57',
                'updated_at' => '2023-07-01 23:02:01',
            ),
            9 => 
            array (
                'id' => 398,
                'parent_id' => 397,
                'title' => 'Informasi Admin',
                'icon' => NULL,
                'route' => 'admin.setting.admin',
                'sequence' => 10,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-14 21:11:42',
                'updated_at' => '2023-07-01 23:02:01',
            ),
            10 => 
            array (
                'id' => 404,
                'parent_id' => 403,
                'title' => 'Anggota',
                'icon' => NULL,
                'route' => 'admin.lapooran.anggota',
                'sequence' => 41,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-18 18:55:08',
                'updated_at' => '2022-08-20 14:04:25',
            ),
            11 => 
            array (
                'id' => 411,
                'parent_id' => NULL,
                'title' => 'Menu Lainnya',
                'icon' => NULL,
                'route' => NULL,
                'sequence' => 6,
                'active' => 1,
                'type' => 0,
                'created_at' => '2022-09-15 21:18:04',
                'updated_at' => '2023-07-01 23:02:01',
            ),
            12 => 
            array (
                'id' => 430,
                'parent_id' => NULL,
                'title' => 'Import',
                'icon' => 'fas fa-upload',
                'route' => NULL,
                'sequence' => 7,
                'active' => 1,
                'type' => 1,
                'created_at' => '2023-05-16 18:10:19',
                'updated_at' => '2023-07-01 23:02:01',
            ),
            13 => 
            array (
                'id' => 438,
                'parent_id' => 397,
                'title' => 'Halaman Dashboard',
                'icon' => NULL,
                'route' => 'admin.setting.dashboard',
                'sequence' => 11,
                'active' => 1,
                'type' => 1,
                'created_at' => '2023-05-29 20:03:50',
                'updated_at' => '2023-07-01 23:02:01',
            ),
            14 => 
            array (
                'id' => 446,
                'parent_id' => NULL,
                'title' => 'Perhitungan',
                'icon' => 'fas fa-calculator',
                'route' => 'admin.perhitungan',
                'sequence' => 5,
                'active' => 1,
                'type' => 1,
                'created_at' => '2023-05-31 22:08:34',
                'updated_at' => '2023-07-01 23:02:01',
            ),
            15 => 
            array (
                'id' => 448,
                'parent_id' => NULL,
                'title' => 'Kriteria',
                'icon' => 'fas fa-clipboard-list',
                'route' => 'admin.kriteria',
                'sequence' => 2,
                'active' => 1,
                'type' => 1,
                'created_at' => '2023-07-01 16:03:47',
                'updated_at' => '2023-07-01 18:17:01',
            ),
            16 => 
            array (
                'id' => 449,
                'parent_id' => NULL,
                'title' => 'Alternatif',
                'icon' => 'fas fa-map-marked-alt',
                'route' => 'admin.alternatif',
                'sequence' => 3,
                'active' => 1,
                'type' => 1,
                'created_at' => '2023-07-01 18:16:35',
                'updated_at' => '2023-07-01 18:17:01',
            ),
            17 => 
            array (
                'id' => 450,
                'parent_id' => NULL,
                'title' => 'Alternatif Nilai',
                'icon' => 'fas fa-edit',
                'route' => 'admin.alternatif.nilai',
                'sequence' => 4,
                'active' => 1,
                'type' => 1,
                'created_at' => '2023-07-01 18:17:59',
                'updated_at' => '2023-07-01 18:18:22',
            ),
            18 => 
            array (
                'id' => 451,
                'parent_id' => 430,
                'title' => 'Alternatif',
                'icon' => NULL,
                'route' => 'admin.import.alternatif',
                'sequence' => 8,
                'active' => 1,
                'type' => 1,
                'created_at' => '2023-07-01 18:34:15',
                'updated_at' => '2023-07-01 23:02:01',
            ),
        ));
        
        
    }
}
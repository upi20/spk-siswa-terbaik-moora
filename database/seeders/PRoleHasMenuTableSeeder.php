<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PRoleHasMenuTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('p_role_has_menu')->delete();
        
        \DB::table('p_role_has_menu')->insert(array (
            0 => 
            array (
                'id' => 155,
                'role_id' => 1,
                'menu_id' => 398,
                'created_at' => '2023-03-25 00:10:13',
                'updated_at' => '2023-03-25 00:10:13',
            ),
            1 => 
            array (
                'id' => 258,
                'role_id' => 1,
                'menu_id' => 430,
                'created_at' => '2023-05-16 18:10:19',
                'updated_at' => '2023-05-16 18:10:19',
            ),
            2 => 
            array (
                'id' => 285,
                'role_id' => 1,
                'menu_id' => 346,
                'created_at' => '2023-05-23 21:06:14',
                'updated_at' => '2023-05-23 21:06:14',
            ),
            3 => 
            array (
                'id' => 298,
                'role_id' => 1,
                'menu_id' => 361,
                'created_at' => '2023-05-29 15:15:08',
                'updated_at' => '2023-05-29 15:15:08',
            ),
            4 => 
            array (
                'id' => 299,
                'role_id' => 1,
                'menu_id' => 368,
                'created_at' => '2023-05-29 15:15:25',
                'updated_at' => '2023-05-29 15:15:25',
            ),
            5 => 
            array (
                'id' => 300,
                'role_id' => 1,
                'menu_id' => 369,
                'created_at' => '2023-05-29 15:15:33',
                'updated_at' => '2023-05-29 15:15:33',
            ),
            6 => 
            array (
                'id' => 306,
                'role_id' => 1,
                'menu_id' => 438,
                'created_at' => '2023-05-29 20:03:50',
                'updated_at' => '2023-05-29 20:03:50',
            ),
            7 => 
            array (
                'id' => 307,
                'role_id' => 1,
                'menu_id' => 397,
                'created_at' => '2023-05-30 02:11:23',
                'updated_at' => '2023-05-30 02:11:23',
            ),
            8 => 
            array (
                'id' => 314,
                'role_id' => 1,
                'menu_id' => 345,
                'created_at' => '2023-05-30 02:20:34',
                'updated_at' => '2023-05-30 02:20:34',
            ),
            9 => 
            array (
                'id' => 317,
                'role_id' => 1,
                'menu_id' => 386,
                'created_at' => '2023-05-30 02:20:42',
                'updated_at' => '2023-05-30 02:20:42',
            ),
            10 => 
            array (
                'id' => 320,
                'role_id' => 1,
                'menu_id' => 373,
                'created_at' => '2023-05-30 02:20:47',
                'updated_at' => '2023-05-30 02:20:47',
            ),
            11 => 
            array (
                'id' => 323,
                'role_id' => 1,
                'menu_id' => 411,
                'created_at' => '2023-05-30 02:20:52',
                'updated_at' => '2023-05-30 02:20:52',
            ),
            12 => 
            array (
                'id' => 335,
                'role_id' => 1,
                'menu_id' => 448,
                'created_at' => '2023-07-01 16:03:47',
                'updated_at' => '2023-07-01 16:03:47',
            ),
            13 => 
            array (
                'id' => 337,
                'role_id' => 1,
                'menu_id' => 449,
                'created_at' => '2023-07-01 18:16:54',
                'updated_at' => '2023-07-01 18:16:54',
            ),
            14 => 
            array (
                'id' => 339,
                'role_id' => 1,
                'menu_id' => 450,
                'created_at' => '2023-07-01 18:18:22',
                'updated_at' => '2023-07-01 18:18:22',
            ),
            15 => 
            array (
                'id' => 346,
                'role_id' => 1,
                'menu_id' => 451,
                'created_at' => '2023-07-01 18:34:15',
                'updated_at' => '2023-07-01 18:34:15',
            ),
            16 => 
            array (
                'id' => 348,
                'role_id' => 1,
                'menu_id' => 446,
                'created_at' => '2023-07-01 20:47:39',
                'updated_at' => '2023-07-01 20:47:39',
            ),
            17 => 
            array (
                'id' => 349,
                'role_id' => 1,
                'menu_id' => 367,
                'created_at' => '2023-07-01 23:09:34',
                'updated_at' => '2023-07-01 23:09:34',
            ),
        ));
        
        
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(PRolesTableSeeder::class);
        $this->call(PPermissionsTableSeeder::class);
        $this->call(PMenuTableSeeder::class);
        $this->call(PModelHasPermissionsTableSeeder::class);
        $this->call(PModelHasRolesTableSeeder::class);
        $this->call(PRoleHasPermissionsTableSeeder::class);
        $this->call(PRoleHasMenuTableSeeder::class);
        $this->call(SessionsTableSeeder::class);
        $this->call(LogsTableSeeder::class);

        $this->call(KriteriaTableSeeder::class);
        $this->call(KriteriaNilaiTableSeeder::class);
        $this->call(ImportAlternatifTableSeeder::class);
        $this->call(AlternatifTableSeeder::class);
        $this->call(AlternatifNilaiTableSeeder::class);
    }
}

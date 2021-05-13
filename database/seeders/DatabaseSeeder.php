<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        /* 'php artisan db:seed' doesn't work if exist previous unique records,
         * you need delete all records before to run seeder, the
         * 'truncateTables' function has that objetive.
         */
        $this->truncateTables([
            'users',
        ]);

        // Run seeders for each class below
        $this->call([
            UserSeeder::class,
        ]);

    }

    protected function truncateTables(array $tables)
    {
        // Delete all records on each $table
        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\CelularSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            CelularSeeder::class,
            //OrcamentoSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();
    }
}

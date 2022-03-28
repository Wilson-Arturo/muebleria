<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Materias;

use Illuminate\Support\Facades\BD;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Materias::factory(10)->create();
        // factory(Materias::class,50)->create();
    }
}

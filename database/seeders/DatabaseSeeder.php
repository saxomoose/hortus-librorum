<?php

namespace Database\Seeders;

use App\Models\Summary;
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
        Summary::factory(5)->create();
    }
}

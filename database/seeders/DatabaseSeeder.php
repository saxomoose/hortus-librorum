<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Summary;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    //Seeds the application database.
    public function run()
    {
        Summary::factory(30)
            ->has(Author::factory()->count(2))
            ->has(Tag::factory()->count(3))
            ->create();
    }
}

<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Summary;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        Summary::factory(10)
            ->has(Author::factory()->count(2))//has() functions populate the intermediate tables.
            ->has(Tag::factory()->count(3))
            ->create();//To be uncommented in development.

        User::factory(1)->create();
    }
}

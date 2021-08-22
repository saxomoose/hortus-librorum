<?php

namespace Database\Factories;

use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AuthorFactory extends Factory {
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Author::class;

    /**
     * Defines the Author model's default state to be used at seed.
     *
     * @return array
     */
    public function definition() {
        $name = $this->faker->name();
        $slug = Str::of($name)->slug('-');

        return [
            'name' => $name,
            'slug' => $slug
        ];
    }
}

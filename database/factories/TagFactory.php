<?php

namespace Database\Factories;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TagFactory extends Factory {
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tag::class;

    /**
     * Define the Tag model's default state to be used at seed.
     *
     * @return array
     */
    public function definition() {
        $name = $this->faker->word();
        $slug = Str::of($name)->slug();

        return [
            'name' => $name,
            'slug' => $slug
        ];
    }
}

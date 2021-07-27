<?php

namespace Database\Factories;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

class TagFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tag::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    //Defines the Tag model's default state to be used at seed.
    public function definition()
    {
        return [
            'tag_name' => $this->faker->unique()->word(),
            'slug' => $this->faker->unique()->slug()
        ];
    }
}

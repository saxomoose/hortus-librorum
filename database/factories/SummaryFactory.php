<?php

namespace Database\Factories;

use App\Models\Summary;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

class SummaryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Summary::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    //Defines the Summary model's default state to be used at seed.
    public function definition()
    {
        return [
            'tag_id' => Tag::factory(),
            'slug' => $this->faker->slug(),
            'title' => $this->faker->sentence(),
            'excerpt' => '<p>' . implode('</p><p>', $this->faker->paragraphs(2)) . '</p>',
            'body' => '<p>' . implode('</p><p>', $this->faker->paragraphs(6)) . '</p>',
            'published_at' => $this->faker->dateTime
        ];
    }
}

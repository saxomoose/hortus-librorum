<?php

namespace Database\Factories;

use App\Models\Summary;
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
            'slug' => $this->faker->slug(),
            'title' => $this->faker->sentence(),
            'publication_year' => $this->faker->year(),
            'excerpt' => '<p>' . implode('</p><p>', $this->faker->paragraphs(1)) . '</p>',
            'body' => '<p>' . implode('</p><p>', $this->faker->paragraphs(100)) . '</p>',
            'published_at' => $this->faker->dateTime()//to be reviewed
        ];
    }
}

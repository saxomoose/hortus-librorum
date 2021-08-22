<?php

namespace Database\Factories;

use App\Models\Summary;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SummaryFactory extends Factory {
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Summary::class;

    /**
     * Defines the Summary model's default state to be used at seed.
     *
     * @return array
     */
    public function definition() {
        $title = $this->faker->sentence();
        $slug = Str::of($title)->slug('-');

        return [
            'title' => $title,
            'slug' => $slug,
            'publication_year' => $this->faker->year(),
            'excerpt' => '<p>' . implode('</p><p>', $this->faker->paragraphs(1)) . '</p>',
            'body' => '<p>' . implode('</p><p>', $this->faker->paragraphs(100)) . '</p>',
            'published_at' => $this->faker->dateTime()//to be reviewed
        ];
    }
}

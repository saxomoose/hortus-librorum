<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory {
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Application has only one registered user generated at seed. This user is also the (only) admin.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => config('admin.name'),
            'email' => config('admin.email'),
            'email_verified_at' => now(),
            'password' => bcrypt(config('admin.password'))
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // $user_id = DB::table('users')->pluck('id');
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'password' => Hash::make('bulletinboard'),
            'profile' => fake()->image('public/images'),
            'type' => fake()->numberBetween(0, 1),
            'phone' => fake()->phoneNumber(),
            'address' => fake()->address(),
            'dob' => fake()->date(),
            // 'create_user_id' => fake()->numberBetween($min = $user_id, $max = $user_id[count($user_id)] - 1),
            'create_user_id' => fake()->numberBetween(1, 1),
            'updated_user_id' => fake()->numberBetween(1, 1),
            'deleted_user_id' => fake()->numberBetween(1, 1),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}

<?php

namespace Database\Factories;

use Countries;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
    public function definition(): array
    {

        $countries = Countries::getList('en', 'php');
        $roles = ['young', 'student', 'individual', 'professional', 'corporate'];

        return [
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'email' => fake()->unique()->safeEmail(),
            'username' => fake()->unique()->userName(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'country' => array_rand($countries),
            'role' => $roles[array_rand($roles)],

        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }

    /**
     * Indicate that the model should be admin.
     */
    public function admin(): static
    {
        return $this->state(fn (array $attributes) => [
            'role' => 'admin',
            'email' => 'admin@admin.com',
            'username' => 'admin',
            'status' => 'active',
            'password' => Hash::make('admin123')
        ]);
    }

    /**
     * Indicate that the model should be election commision.
     */
    public function electionComission(): static
    {
        return $this->state(fn (array $attributes) => [
            'role' => 'election_comission',
            'email' => 'election@admin.com',
            'username' => 'election-comission',
            'status' => 'active',
            'password' => Hash::make('admin123')
        ]);
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_name' =>fake()->name(),
            'customer_username' =>fake()->unique()->userName(),
            'customer_password' =>fake()->password(),
            'customer_tel' => '0' . mt_rand(600000000, 999999999),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\order;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Feedback>
 */
class FeedbackFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'order_id' => order::inRandomOrder()->first()->order_id,
            'customer_id' => Customer::inRandomOrder()->first()->customer_id,
            'feedback_description' => fake()->sentence(),
            'feedback_rating' => fake()->numberBetween(1, 5),
            'feedback_time' => fake()->date(),
        ];
    }
}

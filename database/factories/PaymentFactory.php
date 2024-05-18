<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'order_id' =>Order::all()->random()->order_id,
            'payment_method' =>fake()->randomElement(['Cash', 'Credit Card', 'Debit Card']),
            'payment_amount' =>fake()->randomFloat(2, 0, 1000),
            'payment_date' =>fake()->date(),
        ];
    }
}

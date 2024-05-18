<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employee_name' =>fake()->name(),
            'employee_username' =>fake()->unique()->userName(),
            'employee_password' =>fake()->password(),
            'role' =>fake()->randomElement(['admin','technician']),
            'department' =>fake()->randomElement(['hardware','software','networking','security']),
            'is_active' =>fake()->randomElement([0,1]), 
            'employee_tel' => '0' . mt_rand(600000000, 999999999),
        ];
    }
}

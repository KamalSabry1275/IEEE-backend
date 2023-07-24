<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_id' => Customer::factory(),
            'amount' => fake()->buildingNumber(),
            'status' => fake()->randomElement(['B','P','V']),
            'billedDate' => fake()->dateTime(),
            'paidDate' => fake()->dateTime(),
        ];
    }
}

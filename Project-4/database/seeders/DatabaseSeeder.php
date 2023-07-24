<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Customer;
use App\Models\Invoice;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();
        User::create([
            'name' => "Kamal",
            'email' => "kamal@gmail.com",
            'password' => "123",
            'remember_token' => Str::random(10),
        ]);
        Customer::factory(10)->create();
        Invoice::factory(10)->create(['customer_id'=>"2"]);
        Invoice::factory(10)->create(['customer_id'=>"7"]);
        Invoice::factory(10)->create(['customer_id'=>"5"]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

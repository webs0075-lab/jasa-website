<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'agabunai96@gmail.com',
            'password' => \Illuminate\Support\Facades\Hash::make('papua,123'),
            'is_admin' => true,
            'email_verified_at' => now(),
        ]);

        $this->call([
            PortfolioSeeder::class,
            BlogSeeder::class,
            TestimonialSeeder::class,
        ]);
    }
}

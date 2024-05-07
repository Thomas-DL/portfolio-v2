<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Enums\RolesEnum;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RolesSeeder::class);

        User::factory()->create([
            'name' => 'Thomas',
            'email' => 'contact@thomasdelage.com',
            'password' => Hash::make('password'),
        ])->assignRole(RolesEnum::ADMIN);
    }
}

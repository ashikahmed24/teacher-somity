<?php

namespace Database\Seeders;

use App\UserRole;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'name' => 'Main Admin',
                'email' => 'info@ashikahmed.net',
                'password' => Hash::make('password'),
                'role' => UserRole::ADMINISTRATOR,
                'disabled' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}

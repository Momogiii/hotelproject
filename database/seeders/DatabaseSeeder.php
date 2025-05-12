<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'role' => '1',
            'status' => 1,
            'hp' => '0895635777179',
            'password' => bcrypt('admin'),
        ]);
        User::create([
            'name' => 'syahrizal',
            'email' => 'syahrizal@gmail.com',
            'role' => '0',
            'status' => 0,
            'hp' => '0895635777179',
            'password' => bcrypt('admin'),

        ]);
    
    }
}

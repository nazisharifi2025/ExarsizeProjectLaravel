<?php

namespace Database\Seeders;

use App\Models\Classes;
use App\Models\student;
use App\Models\teacher;
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
        // User::factory(100)->create();
        // teacher::factory(10)->create();
        // Classes::factory(5)->create();
        student::factory(90)->create();
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

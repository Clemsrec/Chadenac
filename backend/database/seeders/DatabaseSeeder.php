<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        DB::table('users')->insert([
            'first_name' => 'Admin',
            'last_name' => 'Chadenac',
            'email' => env('DEFAULT_ADMIN_EMAIL', 'admin@chadenac.com'),
            'password' => bcrypt(Str::random(16)),
            'role' => 'admin',
        ]);
    }
}
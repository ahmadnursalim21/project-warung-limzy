<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $users = [
            [
                'name' => 'admin',
                'email' => 'admin@example.com',
                'password' => 'admin123',
            ],
            [
                'name' => 'user',
                'email' => 'user@example.com',
                'password' => 'user123',
            ],
        ];
        DB::table('users')->insert($users);
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
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
            'name' => 'Test',
            'apellido' => 'Blass',
            'phone' => '123456789',
            'password'=>'$2y$12$98eSJIwo9kSD43H8UMsWteZyzzxIQwSFbY0An8XTKd8zoA12sF7jy', //password: 123456789
            'email' => 'test@example.com',
        ]);
    }
}

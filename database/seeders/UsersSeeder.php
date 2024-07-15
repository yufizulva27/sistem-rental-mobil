<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Arumi',
                'phone_number' => '1234567890',
                'address' => '123 Main St, Anytown, USA',
                'username' => 'arum',
                'email' => 'arum@example.com',
                'password' => Hash::make('admin123'), // Hash the password
                'role' => 'admin',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Dom Bosco',
                'phone_number' => '0987654321',
                'address' => '456 Elm St, Anytown, USA',
                'username' => 'dom',
                'email' => 'dombosco@example.com',
                'password' => Hash::make('user123'), // Hash the password
                'role' => 'user',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}

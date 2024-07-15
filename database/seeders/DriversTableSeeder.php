<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DriversTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drivers')->insert([
            [
                'name' => 'John Doe',
                'phone_number' => '1234567890',
                'tersedia' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Smith',
                'phone_number' => '0987654321',
                'tersedia' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'James Bond',
                'phone_number' => '5555555555',
                'tersedia' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

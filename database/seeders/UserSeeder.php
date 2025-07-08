<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(100)->create();

        User::firstOrCreate(
        ['email_address' => 'test@example.com'],
        [
            'first_name' => 'Test',
            'last_name' => 'User',
            'phone_number' => '0700000000',
            'cohort' => 'Test Cohort',
            'password' => bcrypt('password'),
            'remember_token' => \Str::random(10),
            'created_by' => 'Seeder',
            'is_active' => true,
        ]
      ); 

    }
}

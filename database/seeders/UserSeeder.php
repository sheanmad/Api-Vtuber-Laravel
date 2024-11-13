<?php

namespace Database\Seeders;

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
        User::create([
            'name' => 'Shean',
            'email' => 'shean@example.com',
            'password' => Hash::make('Password1'),
        ]);

        User::create([
            'name' => 'Michael',
            'email' => 'michael@example.com',
            'password' => Hash::make('Password1'),
        ]);
    }
}

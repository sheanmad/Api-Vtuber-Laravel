<?php

namespace Database\Seeders;

use App\Models\Favorite;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FavoriteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Favorite::create([
            'user_id' => 1,
            'character_id' => 1,
        ]);

        Favorite::create([
            'user_id' => 2,
            'character_id' => 1,
        ]);
    }
}

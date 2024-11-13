<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comment::create([
            'character_id' => 1,
            'user_id' => 1,
            'comment' => 'Love this character!',
            'rating' => 5,
        ]);

        Comment::create([
            'character_id' => 1,
            'user_id' => 2,
            'comment' => 'Very entertaining!',
            'rating' => 4,
        ]);
    }
}

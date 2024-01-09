<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentSeeder extends Seeder
{
    public function run()
    {
        // Seed comments
        Comment::create([
            'post_id' => 3,
            'body' => 'Sorry 22 pa pasukan namin.',
        ]);

        Comment::create([
            'post_id' => 4,
            'body' => 'Happy 1 Month Old NOAH!!.',
        ]);

        // Add more comments as needed...
    }
}

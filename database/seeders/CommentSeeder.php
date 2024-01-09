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
            'post_id' => 1,
            'body' => 'This is a comment on the first post.',
        ]);

        Comment::create([
            'post_id' => 2,
            'body' => 'This is a comment on the second post.',
        ]);

        // Add more comments as needed...
    }
}

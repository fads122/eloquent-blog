<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run()
    {
        // Seed posts
        Post::create([
            'title' => 'Back 2 School',
            'content' => 'When ang pasukan nyo? Jan 14 samin. Naol 22 pasukan.',
        ]);

        Post::create([
            'title' => 'Happy 1 Month Old Noah Hayven',
            'content' => '1 Month Old Milestone',
        ]);

        // Add more posts as needed...
    }
}

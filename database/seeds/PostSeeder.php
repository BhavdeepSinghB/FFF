<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostSeeder extends Seeder
{
    public function run()
    {
        factory(Post::class, 10)->create();
    }
}

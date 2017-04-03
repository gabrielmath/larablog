<?php

use \Illuminate\Database\Seeder;
use App\Post;

class PostTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('posts')->truncate();


        factory(Post::class, 20)->create();
    }
}
<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $content = 'ポストダミーです。コメントします。コメントします。コメントします。コメントします。コメントします。コメントします。';
        for($i=1; $i<=15; $i++){
            $post = new Post;
            $post->user_id = $i;
            $post->topic_id = $i;
            $post->content = $content;
            $post->save();
        }
    }
}

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
        $content = 'コメントダミーです。コメントします。コメントします。コメントします。コメントします。コメントします。コメントします。';
        for($i=1; $i<=15; $i++){
            $post = new Post;
            $post->title = $i.'番目の投稿';
            $post->name = $i.'番目のユーザー';
            $post->age = 10+$i;
            $post->content = $content;
            $post->save();
        }
    }
}

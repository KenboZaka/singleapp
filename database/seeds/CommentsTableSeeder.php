<?php

use Illuminate\Database\Seeder;
use App\Comment;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $content = 'ダミーです。ダミーです。ダミーです。ダミーです。ダミーです。ダミーです。ダミーです。ダミーです。ダミーです。ダミーです。ダミーです。ダミーです。ダミーです。';
        for($i=1; $i<=15; $i++){
            $comment = new Comment;
            $comment->title = $i.'番目の投稿';
            $comment->name = $i.'番目のユーザー';
            $comment->content = $content;
            $comment->save();
    }
}
}
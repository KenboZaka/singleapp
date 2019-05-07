<?php

use Illuminate\Database\Seeder;
use App\Comment;

class CommentTableSeeder extends Seeder
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
            // $comment->user_id = $i;
            // $comment->post_id = $i;
            $comment->content = $content;
            $comment->save();
        }
    }
}

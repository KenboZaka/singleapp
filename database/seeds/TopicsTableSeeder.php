<?php

use Illuminate\Database\Seeder;
use App\Topic;

class TopicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $content = 'トピックダミーです。ダミーです。ダミーです。ダミーです。ダミーです。ダミーです。ダミーです。ダミーです。ダミーです。ダミーです。ダミーです。ダミーです。ダミーです。';
        for($i=1; $i<=15; $i++){
            $topic = new Topic;
            $topic->genre = $i.'のジャンル';
            $topic->title = $i.'番目のタイトル';
            $topic->body = $content;
            $topic->save();
    }
}
}

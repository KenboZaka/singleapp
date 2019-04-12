<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new Post([
            'name' => 'test01',
            'age' => '20',
            'content' => 'test01test01test01test01test01test01test01test01test01test01test01test01test01test01',
        ]);
            $user->save();
        $user = new Post([
            'name' => 'test02',
            'age' => '22',
            'content' => 'test01test01test01test01test01test01test01test01test01test01test01test01test01test01',
        ]);
            $user->save();

        $user = new Post([
            'name' => 'test03',
            'age' => '23',
            'content' => 'test01test01test01test01test01test01test01test01test01test01test01test01test01test01',
        ]);
            $user->save();

        $user = new Post([
            'name' => 'test04',
            'age' => '24',
            'content' => 'test01test01test01test01test01test01test01test01test01test01test01test01test01test01',
        ]);
            $user->save();

        $user = new Post([
            'name' => 'test05',
            'age' => '25',
            'content' => 'test01test01test01test01test01test01test01test01test01test01test01test01test01test01',
        ]);
            $user->save();

        $user = new Post([
            'name' => 'test06',
            'age' => '26',
            'content' => 'test01test01test01test01test01test01test01test01test01test01test01test01test01test01',
        ]);
            $user->save();

        $user = new Post([
            'name' => 'test07',
            'age' => '27',
            'content' => 'test01test01test01test01test01test01test01test01test01test01test01test01test01test01',
        ]);
            $user->save();
        
    }
}

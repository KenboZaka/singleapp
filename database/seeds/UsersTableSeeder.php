<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<=15; $i++){
            $user = new User;
            $user->name = $i.'番目のユーザー';
            $user->email = $i.'abcdefg@gmail.com';
            $user->save();
    }
}
}
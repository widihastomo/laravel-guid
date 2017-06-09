<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Post;

class DummyData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create sample user
        $user1 = User::create(['name'=>'Widi', 'email'=>'widi@lokavor.studio', 'password'=>bcrypt('password')]);

        //create sample post
        $post1 = Post::create(['title'=>'Post Pertama', 'author_id'=>$user1->id]);
        $post2 = Post::create(['title'=>'Post Kedua', 'author_id'=>$user1->id]);
    }
}

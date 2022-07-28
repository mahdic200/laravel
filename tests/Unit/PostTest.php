<?php

namespace Tests\Unit;

use App\User;
use App\Post;
use App\Comment;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    // public function test_post_exist()
    // {
    //     $this->assertDatabaseHas('posts', ['user_id' => 288]);

    // }

    // public function test_full_name_accessor_works()
    // {
    //     $user = factory(User::class)->make(['first_name' => 'مهدی', 'last_name' => 'رضائی']);
    //     // $this->assertEquals('مهدی رضائی', $user->fullName);
    //     $this->assertEquals('مهدی رضائی', $user->full_name);
    // }

    public function test_relation()
    {
        $comment = factory(Comment::class)->make([
            'comment' => 'nice',
            'post_id' => 10,
        ]);
        $this->assertInstanceOf('App\Post', $comment->post);
    }

}

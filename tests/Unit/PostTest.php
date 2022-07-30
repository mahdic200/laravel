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
    // public function test_input_missing_a_title_is_rejected()
    // {
    //     $response = $this->post(route('post.store'), [
    //         'title' => 'test title',
    //         // 'user_id' => 20,
    //     ]);
    //     $response->assertRedirect();
    //     $response->assertSessionHasErrors();
    // }
    public function test_valid_input_should_create_a_post_in_database()
    {
        $this->post(route('post.store'), ['title' => 'this is my new title', 'user_id' => 15]);
        $this->assertDatabaseHas('posts', ['title' => 'this is my new title', 'user_id' => 15]);

    }

}

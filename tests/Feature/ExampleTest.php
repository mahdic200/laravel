<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    // public function test_creates_a_new_post()
    // {
    //     $user = factory(User::class)->create();
    //     $this->be($user);
    //     $this->post(route('post.store'), [
    //         'title' => 'new post',
    //         'user_id' => $user->id,
    //     ]);
    //     $this->assertDatabaseHas('posts', [
    //         'title' => 'new post',
    //         'user_id' => $user->id,
    //     ]);
    // }
    public function test_creates_a_new_post()
    {
        $user = factory(User::class)->create();
        $this->actingAs($user)->post(route('post.store'), [
            'title' => 'new post',
            'user_id' => $user->id,
        ]);
        $this->assertDatabaseHas('posts', [
            'title' => 'new post',
            'user_id' => $user->id,
        ]);
    }
}

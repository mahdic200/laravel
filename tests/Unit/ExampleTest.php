<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testPushAndPop()
    {
        $users = [];
        $this->assertSame(0, count($users));
        array_push($users, 'mahdi');
        $this->assertSame('mahdi', $users[count($users) - 1]);
        $this->assertSame(1, count($users));

        $this->assertSame('hassan', array_pop($users));
        $this->assertSame(0, count($users));

    }
}

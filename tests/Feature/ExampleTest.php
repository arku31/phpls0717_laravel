<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $user = \Auth::loginUsingId(3);
        $response = $this->get('/good');

        $response->assertStatus(200);

        $user = \Auth::loginUsingId(1);
        $response = $this->get('/good');

        $response->assertStatus(302);
    }
}

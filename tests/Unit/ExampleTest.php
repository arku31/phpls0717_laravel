<?php

namespace Tests\Unit;

use App\Good;
use App\Http\Controllers\GoodController;
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
        $goodscnt = Good::count();

        $gc = new GoodController();
        $totalgoods = $gc->totalgoods();
        $this->assertTrue($goodscnt == $totalgoods);
    }
}

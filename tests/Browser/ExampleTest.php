<?php

namespace Tests\Browser;

use App\Good;
use App\User;
use Faker\Factory;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->waitFor('h1')
                    ->assertSee('hello');
        });
    }

    public function testGoodCreating()
    {
        $this->browse(function (Browser $browser) {
            $faker = Factory::create();
            $name = $faker->name;
            $price = rand(1, 100);
            $browser->loginAs(User::find(3))
                ->visit('/good/create')
                ->type('name', $name)
                ->type('price', $price)
                ->press('submitbtn')
                ->assertSee('controls');

            $good = Good::where('name', $name)->where('price', $price)->count();
            $this->assertTrue((boolean)$good);
        });
    }
}

<?php

namespace Tests;

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class CoinsTest extends TestCase
{
    /**
     * A basic test Coins.
     *
     * @return void
     */
    public function test_get_main_coins()
    {

        $this->get('/');
        $this->assertEquals(
            200, $this->response->getStatusCode()
        );
        $this->assertStringContainsString("El Dolar en Argentina", $this->response->getContent());
    }

    public function test_get_all_coins()
    {

        $this->get('/coins');
        $this->assertEquals(
            200, $this->response->getStatusCode()
        );
        $this->assertStringContainsString("Todas las divisas", $this->response->getContent());
    }
}

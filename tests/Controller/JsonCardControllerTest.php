<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Test cases for controller JsonCardController
 */
class JsonCardControllerTest extends WebTestCase
{
    public function testDeckRoute(): void
    {
        $client = static::createClient();

        $client->request('GET', '/api/deck');

        $this->assertResponseIsSuccessful();
    }

    public function testShuffleRoute(): void
    {
        $client = static::createClient();

        $client->request('GET', '/api/deck/shuffle');

        $this->assertResponseIsSuccessful();
    }
}

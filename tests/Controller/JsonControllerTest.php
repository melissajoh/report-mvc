<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Test cases for controller JsonController
 */
class JsonControllerTest extends WebTestCase
{
    public function testQuoteRoute(): void
    {
        $client = static::createClient();

        $client->request('GET', '/api/quote');

        $this->assertResponseIsSuccessful();
    }
}

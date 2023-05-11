<?php

namespace App\Controller;

use App\Card\GameBoard;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Test cases for controller MainController
 */
class MainControllerTest extends WebTestCase
{
    public function testIndexRoute(): void
    {
        $client = static::createClient();

        $client->request('GET', '/');

        $this->assertResponseIsSuccessful();
    }

    public function testReportRoute(): void
    {
        $client = static::createClient();

        $client->request('GET', '/report');

        $this->assertResponseIsSuccessful();
    }

    public function testAboutRoute(): void
    {
        $client = static::createClient();

        $client->request('GET', '/about');

        $this->assertResponseIsSuccessful();
    }

    public function testLuckyRoute(): void
    {
        $client = static::createClient();

        $client->request('GET', '/lucky');

        $this->assertResponseIsSuccessful();
    }

    public function testApiRoute(): void
    {
        $client = static::createClient();

        $client->request('GET', '/api');

        $this->assertResponseIsSuccessful();
    }

    public function testMetricsRoute(): void
    {
        $client = static::createClient();

        $client->request('GET', '/metrics');

        $this->assertResponseIsSuccessful();
    }
}

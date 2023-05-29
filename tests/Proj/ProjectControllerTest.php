<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Test cases for controller ProjectController
 */
class ProjectControllerTest extends WebTestCase
{
    // public function testInitRoute(): void
    // {
    //     $client = static::createClient();

    //     $client->request('GET', '/proj/init');

    //     $this->assertResponseRedirects('/proj/game');
    // }

    public function testProjRoute(): void
    {
        $client = static::createClient();

        $client->request('GET', '/proj');

        $this->assertResponseIsSuccessful();
    }

    public function testGameRoute(): void
    {
        $client = static::createClient();

        $client->request('GET', '/proj/game');

        $this->assertResponseIsSuccessful();
    }

    public function testAboutRoute(): void
    {
        $client = static::createClient();

        $client->request('GET', '/proj/about');

        $this->assertResponseIsSuccessful();
    }

    public function testDatabaseRoute(): void
    {
        $client = static::createClient();

        $client->request('GET', '/proj/about/database');

        $this->assertResponseIsSuccessful();
    }

    public function testCheatRoute(): void
    {
        $client = static::createClient();

        $client->request('GET', '/proj/cheat');

        $this->assertResponseIsSuccessful();
    }

    // public function testApiRoute(): void
    // {
    //     $client = static::createClient();

    //     $client->request('GET', '/proj/api');

    //     $this->assertResponseIsSuccessful();
    // }
}

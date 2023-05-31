<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Request;

/**
 * Test cases for controller ProjectController
 */
class ProjectControllerTest extends WebTestCase
{
    public function testProjRoute(): void
    {
        $client = static::createClient();

        $client->request('GET', '/proj');

        $this->assertResponseIsSuccessful();
    }

    public function testGameRoute(): void
    {
        $client = static::createClient();

        $client->followRedirects();
        $crawler = $client->request('GET', '/proj/game');
        $form = $crawler->selectButton('send_command')->form();
        $form['command']->setValue('gå norr');
        $client->submit($form);

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

    public function testApiRoute(): void
    {
        $client = static::createClient();

        $client->request('GET', '/proj/api');

        $this->assertResponseIsSuccessful();
    }

    public function testResetRoute(): void
    {
        $client = static::createClient();

        // $conn = $this->createMock(Connection::class);
        // $conn->method('executeStatement')
        // ->willReturn(true);

        $client->request('GET', '/proj/reset');

        // $this->assertResponseIsSuccessful();
        $this->assertResponseRedirects('/proj');
    }
}

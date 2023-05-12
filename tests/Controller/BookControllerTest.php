<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Test cases for controller BookController
 */
class BookControllerTest extends WebTestCase
{
    public function testLibraryRoute(): void
    {
        $client = static::createClient();

        $client->request('GET', '/library');

        $this->assertResponseIsSuccessful();
    }

    public function testLibraryShowRoute(): void
    {
        $client = static::createClient();

        $client->request('GET', '/library/show');

        $this->assertResponseIsSuccessful();
    }

    public function testLibraryCreate(): void
    {
        $client = static::createClient();

        $client->request('GET', '/library/create');

        $this->assertResponseIsSuccessful();
    }

    public function testLibraryBooksRoute(): void
    {
        $client = static::createClient();

        $client->request('GET', 'api/library/books');

        $this->assertResponseIsSuccessful();
    }
}

<?php

namespace App\Controller;

use App\Proj\Backpack;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Test cases for controller ProjJsonController
 */
class ProjJsonControllerTest extends WebTestCase
{
    public function testBackpackRoute(): void
    {
        $client = static::createClient();

        $backpack = $this->createMock(Backpack::class);
        $backpack->method('getItems')
        ->willReturn([]);

        $client->request('GET', '/proj/api/backpack');

        $this->assertResponseIsSuccessful();
    }

    public function testItemsRoute(): void
    {
        $client = static::createClient();

        $client->request('GET', '/proj/api/items');

        $this->assertResponseIsSuccessful();
    }

    // public function testSingleItemsRoute(): void
    // {
    //     $client = static::createClient();

    //     $client->request('GET', '/proj/api/items/{id}');

    //     $this->assertResponseIsSuccessful();
    // }

    public function testRoomsRoute(): void
    {
        $client = static::createClient();

        $client->request('GET', '/proj/api/rooms');

        $this->assertResponseIsSuccessful();
    }

    public function testAddRoute(): void
    {
        $client = static::createClient();

        $client->request('GET', '/proj/api/add');

        $this->assertResponseIsSuccessful();
    }
}

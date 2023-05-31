<?php

namespace App\Controller;

use App\Proj\Backpack;
use App\Repository\ItemsRepository;
use Doctrine\Persistence\ObjectRepository;
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

    public function testSingleItemsRoute(): void
    {
        $client = static::createClient();

        // $this->expectException(\ErrorException::class);

        // $itemRep = $this->createMock(ObjectRepository::class);
        // $itemRep->expects($this->any())
        //     ->method('find')
        //     ->willReturn(null);

        // $this->assertEquals($e->getCode(), 404);

        $client->request('GET', '/proj/api/items/flaska1');

        $this->assertResponseIsSuccessful();
    }

    public function testRoomsRoute(): void
    {
        $client = static::createClient();

        $client->request('GET', '/proj/api/rooms');

        $this->assertResponseIsSuccessful();
    }

    public function testAddRoute(): void
    {
        $client = static::createClient();

        $itemRep = $this->createMock(ObjectRepository::class);
        $itemRep->expects($this->any())
            ->method('find')
            ->willReturn(null);

        $client->request('GET', '/proj/api/add');

        $this->assertResponseIsSuccessful();
    }
}

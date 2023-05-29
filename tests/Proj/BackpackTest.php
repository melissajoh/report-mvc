<?php

namespace App\Proj;

use App\Entity\Items;
use PHPUnit\Framework\TestCase;

/**
 * Test cases for class Backpack
 */
class BackpackTest extends TestCase
{
    /**
     * Construct object and verify that the object has the expected
     * properties, use no arguments
     */
    public function testCreateBackpack(): void
    {
        $backpack = new Backpack();
        $this->assertInstanceOf("\App\Proj\Backpack", $backpack);
    }

    /**
     * Test function add
     */
    public function testAddMethod(): void
    {
        $backpack = new Backpack();

        $item = $this->createMock(Items::class);

        $item->method('getItemName')
        ->willReturn('item');

        $backpack->add($item);

        $res = $backpack->getItems();

        $this->assertEquals([$item], $res);
    }

    /**
     * Test grabbing item
     */
    public function testRemoveMethod(): void
    {
        $backpack = new Backpack();

        $item = $this->createMock(Items::class);
        $item2 = $this->createMock(Items::class);

        $item->method('getItemName')
        ->willReturn('item');

        $item2->method('getItemName')
        ->willReturn('item2');

        $backpack->add($item);
        $backpack->add($item2);
        $backpack->remove($item2);
        $res = $backpack->getItems();
        $this->assertEquals([$item], $res);
    }
}

<?php

namespace App\Entity;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class Items
 */
class ItemsTest extends TestCase
{
    /**
     * Set id of item and check if it is set
     */
    public function testSetId(): void
    {
        $item = new Items();
        $this->assertInstanceOf("\App\Entity\Items", $item);
        $item->setItemId("item1");
        $res = $item->getItemId();
        $this->assertEquals($res, "item1");
    }

    /**
     * Set name of item and check if it is set
     */
    public function testSetName(): void
    {
        $item = new Items();
        $item->setItemName("Hej");
        $res = $item->getItemName();
        $this->assertEquals($res, "Hej");
    }

    /**
     * Set description of item and check if it is set
     */
    public function testSetDescription(): void
    {
        $item = new Items();
        $item->setDescription("En testbeskrivning");
        $res = $item->getDescription();
        $this->assertEquals($res, "En testbeskrivning");
    }

    /**
     * Set use description of item and check if it is set
     */
    public function testSetUseDesc(): void
    {
        $item = new Items();
        $item->setUseDesc("Test Testsson");
        $res = $item->getUseDesc();
        $this->assertEquals($res, "Test Testsson");
    }

    /**
     * Set room id of item and check if it is set
     */
    public function testSetRoomId(): void
    {
        $item = new Items();
        $item->setRoomId(1);
        $res = $item->getRoomId();
        $this->assertEquals($res, 1);
    }

    /**
     * Set grab of item and check if it is set
     */
    public function testSetGrab(): void
    {
        $item = new Items();
        $item->setGrab("yes");
        $res = $item->getGrab();
        $this->assertEquals($res, "yes");
    }

    /**
     * Set lift of item and check if it is set
     */
    public function testSetLift(): void
    {
        $item = new Items();
        $item->setLift("yes");
        $res = $item->getLift();
        $this->assertEquals($res, "yes");
    }

    /**
     * Set hidden of item and check if it is set
     */
    public function testSetHiddenUnder(): void
    {
        $item = new Items();
        $item->setHiddenUnder("item1");
        $res = $item->getHiddenUnder();
        $this->assertEquals($res, "item1");
    }

    /**
     * Set usable of item and check if it is set
     */
    public function testSetUsable(): void
    {
        $item = new Items();
        $item->setUsable("no");
        $res = $item->getUsable();
        $this->assertEquals($res, "no");
    }

    /**
     * Set locked of item and check if it is set
     */
    public function testSetLocked(): void
    {
        $item = new Items();
        $item->setLocked("yes");
        $res = $item->getLocked();
        $this->assertEquals($res, "yes");
    }
}

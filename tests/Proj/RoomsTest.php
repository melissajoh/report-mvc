<?php

namespace App\Entity;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class Rooms
 */
class RoomsTest extends TestCase
{
    public function testId(): void
    {
        $room = new Rooms();
        $this->assertInstanceOf("\App\Entity\Rooms", $room);
        $res = $room->getId();
        $this->assertEquals($res, null);
    }

    /**
     * Set name of room and check if it is set
     */
    public function testSetName(): void
    {
        $room = new Rooms();
        $room->setRoomName("Hej");
        $res = $room->getRoomName();
        $this->assertEquals($res, "Hej");
    }

    /**
     * Set description of room and check if it is set
     */
    public function testSetDescription(): void
    {
        $room = new Rooms();
        $room->setDescription("En testbeskrivning");
        $res = $room->getDescription();
        $this->assertEquals($res, "En testbeskrivning");
    }

    /**
     * Set direction of room and check if it is set
     */
    public function testSetDirection(): void
    {
        $room = new Rooms();
        $room->setNorth(2);
        $res = $room->getNorth();
        $this->assertEquals($res, 2);

        $room->setEast(2);
        $res = $room->getEast();
        $this->assertEquals($res, 2);

        $room->setSouth(2);
        $res = $room->getSouth();
        $this->assertEquals($res, 2);

        $room->setWest(2);
        $res = $room->getWest();
        $this->assertEquals($res, 2);
    }

    /**
     * Set image of room and check if it is set
     */
    public function testSetImage(): void
    {
        $room = new Rooms();
        $room->setImage("img/img.jpg");
        $res = $room->getImage();
        $this->assertEquals($res, "img/img.jpg");
    }

    /**
     * Set lock of room and check if it is set
     */
    public function testSetNLock(): void
    {
        $room = new Rooms();
        $room->setNLock("no");
        $res = $room->getNLock();
        $this->assertEquals($res, "no");

        $room->setELock("no");
        $res = $room->getELock();
        $this->assertEquals($res, "no");

        $room->setSLock("no");
        $res = $room->getSLock();
        $this->assertEquals($res, "no");

        $room->setWLock("no");
        $res = $room->getWLock();
        $this->assertEquals($res, "no");
    }
}

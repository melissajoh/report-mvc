<?php

namespace App\Proj;

use App\Entity\Rooms;
use App\Proj\Backpack;
use App\Repository\RoomsRepository;
use PHPUnit\Framework\TestCase;

/**
 * Test cases for class Room
 */
class RoomTest extends TestCase
{
    /**
     * Construct object and verify that the object has the expected
     * properties, use no arguments
     */
    public function testCreateRoom(): void
    {
        $room = new Room();
        $this->assertInstanceOf("\App\Proj\Room", $room);
    }

    /**
     * Test function checkIfLockedNorth
     */
    public function testCheckIfLockedNorthMethod(): void
    {
        $room = new Room();
        $roomRep = $this->createMock(RoomsRepository::class);
        $rooms = $this->createMock(Rooms::class);
        $rooms->method('getNLock')
        ->willReturn('Bultsax');

        $res = $room->checkIfLockedNorth($rooms, new Backpack, $roomRep);
        $this->assertEquals(array("Den här vägen är låst, hitta rätt föremål", null), $res);

        $backpack = $this->createMock(Backpack::class);
        $backpack->method('getItems')
        ->willReturn(array('Bultsax'));

        $res = $room->checkIfLockedNorth($rooms, $backpack, $roomRep);
        $this->assertEquals(array("", null), $res);
    }

        /**
     * Test function checkIfLockedEast
     */
    public function testCheckIfLockedEastMethod(): void
    {
        $room = new Room();
        $roomRep = $this->createMock(RoomsRepository::class);
        $rooms = $this->createMock(Rooms::class);
        $rooms->method('getELock')
        ->willReturn('Bultsax');

        $res = $room->checkIfLockedEast($rooms, new Backpack, $roomRep);
        $this->assertEquals(array("Den här vägen är låst, hitta rätt föremål", null), $res);

        $backpack = $this->createMock(Backpack::class);
        $backpack->method('getItems')
        ->willReturn(array('Bultsax'));

        $res = $room->checkIfLockedEast($rooms, $backpack, $roomRep);
        $this->assertEquals(array("", null), $res);
    }

    /**
     * Test function checkIfLockedSouth
     */
    public function testCheckIfLockedSouthMethod(): void
    {
        $room = new Room();
        $roomRep = $this->createMock(RoomsRepository::class);
        $rooms = $this->createMock(Rooms::class);
        $rooms->method('getSLock')
        ->willReturn('Bultsax');

        $res = $room->checkIfLockedSouth($rooms, new Backpack, $roomRep);
        $this->assertEquals(array("Den här vägen är låst, hitta rätt föremål", null), $res);

        $backpack = $this->createMock(Backpack::class);
        $backpack->method('getItems')
        ->willReturn(array('Bultsax'));

        $res = $room->checkIfLockedSouth($rooms, $backpack, $roomRep);
        $this->assertEquals(array("", null), $res);
    }

    /**
     * Test function checkIfLockedWest
     */
    public function testCheckIfLockedWestMethod(): void
    {
        $room = new Room();
        $roomRep = $this->createMock(RoomsRepository::class);
        $rooms = $this->createMock(Rooms::class);
        $rooms->method('getWLock')
        ->willReturn('Bultsax');

        $res = $room->checkIfLockedWest($rooms, new Backpack, $roomRep);
        $this->assertEquals(array("Den här vägen är låst, hitta rätt föremål", null), $res);

        $backpack = $this->createMock(Backpack::class);
        $backpack->method('getItems')
        ->willReturn(array('Bultsax'));

        $res = $room->checkIfLockedWest($rooms, $backpack, $roomRep);
        $this->assertEquals(array("", null), $res);
    }
}

<?php

namespace App\Proj;

use App\Entity\Items;
use App\Entity\Rooms;
use App\Repository\ItemsRepository;
use App\Repository\RoomsRepository;
use Doctrine\ORM\EntityManagerInterface;
use PHPUnit\Framework\TestCase;

/**
 * Test cases for class Actions
 */
class ActionsTest extends TestCase
{
    /**
     * Construct object and verify that the object has the expected
     * properties, use no arguments
     */
    public function testCreateActions(): void
    {
        $entityManager = $this->createMock(EntityManagerInterface::class);
        $itemRep = $this->createMock(ItemsRepository::class);
        $roomRep = $this->createMock(RoomsRepository::class);
        $entityManager->method('getRepository')
        ->willReturn($this->onConsecutiveCalls($itemRep, $roomRep));
        $actions = new Actions($entityManager);
        $this->assertInstanceOf("\App\Proj\Actions", $actions);
    }

    /**
     * Test function "go"
    */
    public function testGoMethod(): void
    {
        $entityManager = $this->createMock(EntityManagerInterface::class);
        $itemRep = $this->createMock(ItemsRepository::class);
        $roomRep = $this->createMock(RoomsRepository::class);
        $entityManager->method('getRepository')
        ->willReturn($this->onConsecutiveCalls($itemRep, $roomRep));
        $actions = new Actions($entityManager);

        $rooms = $this->createMock(Rooms::class);
        $rooms->method('getId')
        ->willReturn(1);

        $res = $actions->go("gå norr", $rooms, new Backpack);

        $this->assertEquals(array("Du kan inte gå åt det hållet", 1, new Backpack()), $res);

        $rooms->method("getNorth")
        ->willReturn(2);

        $res = $actions->go("gå norr", $rooms, new Backpack);

        $this->assertEquals(array("", 2, new Backpack()), $res);

        $rooms->method("getEast")
        ->willReturn(2);

        $res = $actions->go("gå öst", $rooms, new Backpack);

        $this->assertEquals(array("", 2, new Backpack()), $res);

        $rooms->method("getSouth")
        ->willReturn(2);

        $res = $actions->go("gå syd", $rooms, new Backpack);

        $this->assertEquals(array("", 2, new Backpack()), $res);

        $rooms->method("getWest")
        ->willReturn(2);

        $res = $actions->go("gå väst", $rooms, new Backpack);

        $this->assertEquals(array("", 2, new Backpack()), $res);
    }

    /**
     * Test grabbing item
     */
    public function testGrabMethod(): void
    {
        $entityManager = $this->createMock(EntityManagerInterface::class);
        $itemRep = $this->createMock(ItemsRepository::class);
        $roomRep = $this->createMock(RoomsRepository::class);
        $entityManager->method('getRepository')
        ->willReturn($this->onConsecutiveCalls($itemRep, $roomRep));
        $actions = new Actions($entityManager);

        $rooms = $this->createMock(Rooms::class);
        $rooms->method('getId')
        ->willReturn(1);

        $items = $this->createMock(Items::class);
        $items->method('getItemName')
        ->willReturn("Flaska");

        $items->method('getDescription')
        ->willReturn('En flaska');

        $items->method('getGrab')
        ->willReturn("yes");

        $backpack = new Backpack();
        $backpack->add($items);

        $res = $actions->grab("ta flaska", $rooms, array($items), $backpack);
        $this->assertEquals(array('Du plockar upp en flaska', 1, $backpack), $res);
    }

    /**
     * Test lifting item
     */
    public function testLiftMethod(): void
    {
        $entityManager = $this->createMock(EntityManagerInterface::class);
        $itemRep = $this->createMock(ItemsRepository::class);
        $roomRep = $this->createMock(RoomsRepository::class);
        $entityManager->method('getRepository')
        ->willReturn($this->onConsecutiveCalls($itemRep, $roomRep));
        $actions = new Actions($entityManager);

        $rooms = $this->createMock(Rooms::class);
        $rooms->method('getId')
        ->willReturn(2);

        $items = $this->createMock(Items::class);
        $items->method('getItemName')
        ->willReturn("Trädgårdstomte");

        $items->method('getDescription')
        ->willReturn('En trädgårdstomte');

        $items->method('getLift')
        ->willReturn("yes");

        $res = $actions->lift("lyft trädgårdstomte", $rooms, array($items), new Backpack());
        $this->assertEquals(array('Du lyfter på en trädgårdstomte och hittar en trädgårdstomte', 2, new Backpack), $res);
    }

    /**
     * Test using item
     */
    public function testUseMethod(): void
    {
        $entityManager = $this->createMock(EntityManagerInterface::class);
        $itemRep = $this->createMock(ItemsRepository::class);
        $roomRep = $this->createMock(RoomsRepository::class);
        $entityManager->method('getRepository')
        ->willReturn($this->onConsecutiveCalls($itemRep, $roomRep));
        $actions = new Actions($entityManager);

        $rooms = $this->createMock(Rooms::class);
        $rooms->method('getId')
        ->willReturn(1);

        $backpack = $this->createMock(Backpack::class);
        $backpack->method('getItems')
        ->willReturn(array("Flaska"));

        $items = $this->createMock(Items::class);
        $items->method('getItemName')
        ->willReturn("Flaska");

        $items->method('getUsable')
        ->willReturn("yes");

        $items->method('getUseDesc')
        ->willReturn("Använder flaska");

        $res = $actions->use("använd flaska", $rooms, array($items), $backpack);
        $this->assertEquals(array('Använder flaska', 1, $backpack), $res);
    }

    /**
     * Test opening item
     */
    public function testOpenMethod(): void
    {
        $entityManager = $this->createMock(EntityManagerInterface::class);
        $itemRep = $this->createMock(ItemsRepository::class);
        $roomRep = $this->createMock(RoomsRepository::class);
        $entityManager->method('getRepository')
        ->willReturn($this->onConsecutiveCalls($itemRep, $roomRep));
        $actions = new Actions($entityManager);

        $rooms = $this->createMock(Rooms::class);
        $rooms->method('getId')
        ->willReturn(3);

        $backpack = $this->createMock(Backpack::class);
        $backpack->method('getItems')
        ->willReturn(array("Nyckel"));

        $items = $this->createMock(Items::class);
        $items->method('getItemName')
        ->willReturn("Kista");

        $items->method('getLocked')
        ->willReturn("Nyckel");

        $items->method('getUseDesc')
        ->willReturn("Öppnar kista");

        $items->method('getRoomId')
        ->willReturn(3);

        $itemRep->method("findBy")
        ->willReturn(array($items));

        $res = $actions->open("öppna kista", $rooms, array($items), $backpack);
        $this->assertEquals(array('Öppnar kista', 3, $backpack), $res);
    }

    /**
     * Test check action
     */
    public function testCheckAction(): void
    {
        $entityManager = $this->createMock(EntityManagerInterface::class);
        $itemRep = $this->createMock(ItemsRepository::class);
        $roomRep = $this->createMock(RoomsRepository::class);
        $entityManager->method('getRepository')
        ->willReturn($this->onConsecutiveCalls($itemRep, $roomRep));
        $actions = new Actions($entityManager);

        $rooms = $this->createMock(Rooms::class);
        $rooms->method('getId')
        ->willReturn(1);

        $rooms->method('getNorth')
        ->willReturn(2);

        $items = $this->createMock(Items::class);
        $items->method('getItemName')
        ->willReturn("Flaska");

        $items->method('getGrab')
        ->willReturn("yes");

        $items->method('getDescription')
        ->willReturn('En flaska');

        $res = $actions->checkAction("gå norr", $rooms, array($items), array($items), new Backpack);
        $this->assertEquals(array('', 2, new Backpack), $res);

        $backpack = new Backpack();
        // $backpack->add("Flaska");

        $res = $actions->checkAction("ta flaska", $rooms, array($items), array($items), $backpack);
        $this->assertEquals(array('Du plockar upp en flaska', 1, $backpack), $res);

        $items->method('getLift')
        ->willReturn("yes");

        $res = $actions->checkAction("lyft flaska", $rooms, array($items), array($items), $backpack);
        $this->assertEquals(array('Du lyfter på en flaska och hittar inget', 1, $backpack), $res);

        $items->method('getUsable')
        ->willReturn("yes");

        $items->method('getUseDesc')
        ->willReturn("Använder flaska");

        $res = $actions->checkAction("använd flaska", $rooms, array($items), array($items), $backpack);
        $this->assertEquals(array('Använder flaska', 1, $backpack), $res);

        $items->method('getLocked')
        ->willReturn("Flaska");

        $items->method('getUseDesc')
        ->willReturn("Öppnar flaska");

        $items->method('getRoomId')
        ->willReturn(1);

        $itemRep->method("findBy")
        ->willReturn(array($items));

        $res = $actions->checkAction("öppna flaska", $rooms, array($items), array($items), $backpack);
        $this->assertEquals(array('Använder flaska', 1, $backpack), $res);

        $res = $actions->checkAction("hej", $rooms, array($items), array($items), $backpack);
        $this->assertEquals(array('Jag vet inte vad du försöker göra', $rooms, $backpack), $res);
    }
}

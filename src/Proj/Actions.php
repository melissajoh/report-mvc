<?php

namespace App\Proj;

use App\Entity\Rooms;
use App\Entity\Items;
use Doctrine\ORM\Entity;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use App\Repository\RoomsRepository;
use App\Repository\ItemsRepository;

/**
 * Actions for adventure game
 * @Entity
  */
class Actions
{
    protected Room $roomClass;
    private ItemsRepository $itemsRepository;
    private RoomsRepository $roomsRepository;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->roomClass = new Room();
        $this->itemsRepository = $entityManager->getRepository(Items::class);
        $this->roomsRepository = $entityManager->getRepository(Rooms::class);
    }

    /**
     * Function to go to new location
     * @param string $command Which way to go
     * @param Rooms $room Room from database
     * @param Backpack $backpack Players backpack
     * @return array<int,string|int|Backpack|null>
     */
    public function go($command, $room, $backpack): array
    {
        $message = "Du kan inte gå åt det hållet";
        $direction = $room->getId();
        if ($command === "gå norr" && $room->getNorth() !== null) {
            list($message, $direction) = $this->roomClass
            ->checkIfLockedNorth($room, $backpack, $this->roomsRepository);
        } elseif ($command === "gå öst" && $room->getEast() !== null) {
            list($message, $direction) = $this->roomClass
            ->checkIfLockedEast($room, $backpack, $this->roomsRepository);
        } elseif ($command === "gå syd" && $room->getSouth() !== null) {
            list($message, $direction) = $this->roomClass
            ->checkIfLockedSouth($room, $backpack, $this->roomsRepository);
        } elseif ($command === "gå väst" && $room->getWest() !== null) {
            list($message, $direction) = $this->roomClass
            ->checkIfLockedWest($room, $backpack, $this->roomsRepository);
        }
        return array($message, $direction, $backpack);
    }

    /**
     * Function to deal with grabbing and lifting items
     * @param string $command What to grab or lift
     * @param Rooms $room Room from database
     * @param array<Items> $items Items from database
     * @param Backpack $backpack Players backpack
     * @return array<int,string|int|Backpack|null>
     */
    public function grab($command, $room, $items, $backpack): array
    {
        $message = "Du kan inte göra så";
        list($item, $itemInItems) = $this->getItemAndItemInItems($command, $items);

        if (str_starts_with($command, "ta") && $itemInItems && $item->getGrab() === "yes") {
            /** @var string $itemString */
            $itemString = $item->getItemName();
            $message = "Du har redan plockat upp " . strtolower($itemString);
            if (!in_array($item->getItemName(), $backpack->getItems())) {
                /** @var string $grabString */
                $grabString = $item->getDescription();
                $message = "Du plockar upp " . strtolower($grabString);
                /** @var string $backpackString */
                $backpackString = $item->getItemName();
                $backpack->add($backpackString);
            }
        }
        return array($message, $room->getId(), $backpack);
    }

    /**
     * Function to deal with grabbing and lifting items
     * @param string $command What to grab or lift
     * @param Rooms $room Room from database
     * @param array<Items> $items Items from database
     * @param Backpack $backpack Players backpack
     * @return array<int,string|int|Backpack|null>
     */
    public function lift($command, $room, $items, $backpack): array
    {
        $message = "Du kan inte göra så";
        list($item, $itemInItems) = $this->getItemAndItemInItems($command, $items);

        if ($itemInItems && $item->getLift() === "yes") {
            /** @var string $itemString */
            $itemString = $item->getDescription();
            $coveredItem = "inget";
            $message = "Du lyfter på " . strtolower($itemString)
            . " och hittar " . $coveredItem;

            foreach ($items as $i) {
                if ($i->getGrab() !== "yes" && $i->getHiddenUnder() == $item->getItemId()) {
                    $coveredItem = $i;
                    /** @var string $coveredString */
                    $coveredString = $coveredItem->getDescription();
                    $coveredItem->setGrab("yes");
                    $this->itemsRepository->save($coveredItem, true);
                    $message = "Du lyfter på " . strtolower($itemString)
                    . " och hittar " . strtolower($coveredString);
                }
            }
        }
        return array($message, $room->getId(), $backpack);
    }

    /**
     * Function for using items that are usable
     * @param string $command What to use
     * @param Rooms $room Room from database
     * @param array<Items> $items Items from database
     * @param Backpack $backpack Players backpack
     * @return array<int,string|int|Backpack|null>
     */
    public function use($command, $room, $items, $backpack): array
    {
        $message = "Du kan inte göra så";
        list($item, $itemInItems) = $this->getItemAndItemInItems($command, $items);

        if ($itemInItems && in_array($item->getItemName(), $backpack->getItems()) && $item->getUsable() === "yes") {
            $message = $item->getUseDesc();
        }
        return array($message, $room->getId(), $backpack);
    }

    /**
     * Function for opening locked things
     * @param string $command What to open
     * @param Rooms $room Room from database
     * @param array<Items> $items Items from database
     * @param Backpack $backpack Players backpack
     * @return array<int,string|int|Backpack|null>
     */
    public function open($command, $room, $items, $backpack): array
    {
        $message = "Du kan inte göra så";
        list($item, $itemInItems) = $this->getItemAndItemInItems($command, $items);

        if ($itemInItems && in_array($item->getLocked(), $backpack
        ->getItems()) && $room->getId() === $item->getRoomId()) {
            $itemsByName = $this->itemsRepository->findBy(array('item_name' => $item->getLocked()));

            /**
             * Fallback if no item is found below
             * @var Items $useDesc
             */
            $useDesc = $this->itemsRepository->find("inget");

            foreach($itemsByName as $item) {
                $useDesc = $item;
            }

            $message = $useDesc->getUseDesc();
        }
        return array($message, $room->getId(), $backpack);
    }

    /**
     * Function for getting item user is referencing and checking if it exists in room
     * @param string $command User command
     * @param array<Items> $items Items in room
     * @return array{0:Items,1:bool}
     */
    public function getItemAndItemInItems($command, $items): array
    {
        $item = array_slice(explode(' ', $command), -1)[0];
        $newItem = new Items();
        $itemInItems = false;
        $itemsLength = count((array)$items);

        for ($i = 0; $i < $itemsLength; $i ++) {
            /** @var string $itemString */
            $itemString = $items[$i]->getItemName();
            if(strtolower($itemString) == $item) {
                $newItem = $items[$i];
                $itemInItems = true;
            }
        }

        return array($newItem, $itemInItems);
    }

    /**
     * Function for checking which action
     * @param string $command What to use
     * @param Rooms $room Room from database
     * @param array<Items> $items Items from database in current room
     * @param array<Items> $allItems All items from database
     * @param Backpack $backpack Players backpack
     * @return array<int,string|int|Backpack|null>|array<int,string|Rooms|Backpack|null>
     */
    public function checkAction(
        $command,
        $room,
        $items,
        $allItems,
        $backpack
    ): array {
        $message = "Jag vet inte vad du försöker göra";
        if (str_starts_with($command, "gå")) {
            return $this->go($command, $room, $backpack);
        } elseif (str_starts_with($command, "ta")) {
            return $this
            ->grab($command, $room, $items, $backpack);
        } elseif (str_starts_with($command, "lyft")) {
            return $this
            ->lift($command, $room, $items, $backpack);
        } elseif (str_starts_with($command, "använd")) {
            return $this
            ->use($command, $room, $allItems, $backpack);
        } elseif (str_starts_with($command, "öppna")) {
            return $this
            ->open($command, $room, $items, $backpack);
        }
        return array($message, $room, $backpack);
    }
}

<?php

namespace App\Proj;

use App\Entity\Rooms;
use App\Repository\RoomsRepository;

/**
 * Class for handling room related things, like locked rooms
 */
class Room
{
    // private ItemsRepository $itemsRepository;
    // private RoomsRepository $roomsRepository;

    // public function __construct(EntityManagerInterface $entityManager)
    // {
    //     $this->itemsRepository = $entityManager->getRepository(Items::class);
    //     $this->roomsRepository = $entityManager->getRepository(Rooms::class);
    // }

    /**
     * Check if north location is locked
     * @param Rooms $room Current room
     * @param Backpack $backpack Players backpack
     * @param RoomsRepository $roomsRepository
     * @return array<int,int|string|null>
     */
    public function checkIfLockedNorth($room, $backpack, $roomsRepository): array
    {
        $message = "";
        $direction = $room->getNorth();
        if ($room->getNLock() !== null && !in_array($room->getNLock(), $backpack->getItems())) {
            $message = "Den här vägen är låst, hitta rätt föremål";
            $direction = $room->getId();
            return array($message, $direction);
        } elseif ($room->getNLock() !== null && in_array($room->getNLock(), $backpack->getItems())) {
            $message = "";
            $direction = $room->getNorth();
            $room->setNLock(null);
            $roomsRepository->save($room, true);
            return array($message, $direction);
        }
        return array($message, $direction);
    }

    /**
     * Check if east location is locked
     * @param Rooms $room Current room
     * @param Backpack $backpack Players backpack
     * @param RoomsRepository $roomsRepository
     * @return array<int,int|string|null>
     */
    public function checkIfLockedEast($room, $backpack, $roomsRepository): array
    {
        $message = "";
        $direction = $room->getEast();

        if ($room->getELock() !== null && !in_array($room->getELock(), $backpack->getItems())) {
            $message = "Den här vägen är låst, hitta rätt föremål";
            $direction = $room->getId();
            return array($message, $direction);
        } elseif ($room->getELock() !== null && in_array($room->getELock(), $backpack->getItems())) {
            $message = "";
            $direction = $room->getEast();
            $room->setELock(null);
            $roomsRepository->save($room, true);
            return array($message, $direction);
        }
        return array($message, $direction);
    }

    /**
     * Check if south location is locked
     * @param Rooms $room Current room
     * @param Backpack $backpack Players backpack
     * @param RoomsRepository $roomsRepository
     * @return array<int,int|string|null>
     */
    public function checkIfLockedSouth($room, $backpack, $roomsRepository): array
    {
        $message = "";
        $direction = $room->getSouth();

        if ($room->getSLock() !== null && !in_array($room->getSLock(), $backpack->getItems())) {
            $message = "Den här vägen är låst, hitta rätt föremål";
            $direction = $room->getId();
            return array($message, $direction);
        } elseif ($room->getSLock() !== null && in_array($room->getSLock(), $backpack->getItems())) {
            $message = "";
            $direction = $room->getSouth();
            $room->setSLock(null);
            $roomsRepository->save($room, true);
            return array($message, $direction);
        }
        return array($message, $direction);
    }

    /**
     * Check if west location is locked
     * @param Rooms $room Current room
     * @param Backpack $backpack Players backpack
     * @param RoomsRepository $roomsRepository
     * @return array<int,int|string|null>
     */
    public function checkIfLockedWest($room, $backpack, $roomsRepository): array
    {
        $message = "";
        $direction = $room->getWest();

        if ($room->getWLock() !== null && !in_array($room->getWLock(), $backpack->getItems())) {
            $message = "Den här vägen är låst, hitta rätt föremål";
            $direction = $room->getId();
            return array($message, $direction);
        } elseif ($room->getWLock() !== null && in_array($room->getWLock(), $backpack->getItems())) {
            $message = "";
            $direction = $room->getWest();
            $room->setWLock(null);
            $roomsRepository->save($room, true);
            return array($message, $direction);
        }
        return array($message, $direction);
    }
}

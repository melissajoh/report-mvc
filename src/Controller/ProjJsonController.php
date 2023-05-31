<?php

namespace App\Controller;

use App\Entity\Items;
use App\Entity\Rooms;
use App\Proj\Backpack;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\ItemsRepository;
use App\Repository\RoomsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

/**
 * Json controller for project
 */
class ProjJsonController extends AbstractController
{
    #[Route("/proj/api/backpack", name: "backpack", methods: ['GET'])]
    public function jsonBackpack(
        SessionInterface $session
    ): Response {
        if ($session->get("backpack") === null) {
            $backpack = new Backpack();
            $session->set("backpack", $backpack);
        }

        /** @var Backpack $backpack */
        $backpack = $session->get("backpack");

        $data = [
            'backpack' => $backpack->getItems()
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
        );

        return $response;
    }

    #[Route("/proj/api/items", name: "items", methods: ['GET'])]
    public function jsonItems(
        ItemsRepository $itemsRepository
    ): Response {
        $items = $itemsRepository
        ->findAll();

        $itemsNameList = [];
        foreach ($items as $item) {
            $itemsNameList[$item->getItemName()] = $item->getDescription();
        }

        $data = [
            'items' => $itemsNameList
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
        );

        return $response;
    }

    #[Route("/proj/api/items/{id}", name: "single_item", methods: ['GET'])]
    public function jsonSingleItem(
        ItemsRepository $itemsRepository,
        string $id
    ): Response {
        $item = $itemsRepository
        ->find($id);

        if (!$item) {
            throw $this->createNotFoundException(
                'No item found for id '.$id
            );
        }

        $data = [
            'item' => $item->getItemName()
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
        );

        return $response;
    }

    #[Route("/proj/api/rooms", name: "rooms", methods: ['GET'])]
    public function jsonRooms(
        RoomsRepository $roomsRepository
    ): Response {
        $rooms = $roomsRepository
        ->findAll();

        $roomsNameList = [];
        foreach ($rooms as $room) {
            $roomsNameList[$room->getRoomName()] = $room->getDescription();
        }

        $data = [
            'rooms' => $roomsNameList
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
        );

        return $response;
    }

    #[Route('/proj/api/add', name: 'proj_api_add', methods: ['GET', 'POST'])]
    public function addItem(
        ManagerRegistry $doctrine,
        ItemsRepository $itemsRepository
    ): Response {
        $entityManager = $doctrine->getManager();

        $item = $itemsRepository
        ->find("item1");

        if (!$item) {
            $item = new Items();
            $item->setItemId("item1");
            $item->setItemName("Item");
            $item->setDescription("Det här är ett adderat föremål");
            $item->setUseDesc("Ingenting händer");
            $item->setRoomId(0);

            $entityManager->persist($item);

            $entityManager->flush();
        }

        $data = [
            "item" => $item->getItemName()
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
        );
        return $response;
    }
}

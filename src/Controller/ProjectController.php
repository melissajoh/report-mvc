<?php

namespace App\Controller;

use App\Entity\Rooms;
use App\Entity\Items;
use App\Proj\Actions;
use App\Proj\Backpack;
use App\Repository\ItemsRepository;
use App\Repository\RoomsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Controller for Adventure game Project
 */
class ProjectController extends AbstractController
{
    #[Route("/proj", name: "proj")]
    public function proj(
        SessionInterface $session,
        RoomsRepository $roomsRepository,
        ItemsRepository $itemsRepository,
    ): Response {
        $roomNumber = 1;
        $backpack = new Backpack();
        $session->set("room_number", $roomNumber);
        $session->set("backpack", $backpack);
        $session->set("message", null);

        /**
         * @var Items $coveredItem Item that is hidden
         */
        $coveredItem = $itemsRepository
        ->find("nyckel1");
        $coveredItem->setGrab("no");
        $itemsRepository->save($coveredItem, true);

        /**
         * @var Rooms $lockedWay Way to room that is locked
         */
        $lockedWay = $roomsRepository
        ->find("2");
        $lockedWay->setELock("Bultsax");
        $roomsRepository->save($lockedWay, true);

        return $this->render('/proj/index.html.twig');
    }

    // #[Route("/proj/init", name: "proj_init")]
    // public function projInit(
    //     SessionInterface $session,
    //     RoomsRepository $roomsRepository,
    //     ItemsRepository $itemsRepository,
    // ): Response {
    //     $session->set("room_number", 1);
    //     $session->set("backpack", new Backpack());
    //     $session->set("message", null);

    //     /**
    //      * @var Items $coveredItem Item that is hidden
    //      */
    //     $coveredItem = $itemsRepository
    //     ->find("nyckel1");
    //     $coveredItem->setGrab("no");
    //     $itemsRepository->save($coveredItem, true);

    //     /**
    //      * @var Rooms $lockedWay Way to room that is locked
    //      */
    //     $lockedWay = $roomsRepository
    //     ->find("2");
    //     $lockedWay->setELock("Bultsax");
    //     $roomsRepository->save($lockedWay, true);

    //     return $this->redirectToRoute('proj_game');
    // }

    #[Route("/proj/game", name: "proj_game", methods: ['GET', 'POST'])]
    public function projGame(
        Request $request,
        SessionInterface $session,
        RoomsRepository $roomsRepository,
        ItemsRepository $itemsRepository,
        EntityManagerInterface $entityManager
    ): Response {
        if ($session->get("room_number") === null) {
            $session->set("room_number", 1);
        }

        if($session->get("backpack") === null) {
            $session->set("backpack", new Backpack());
        }

        /** @var Rooms $room Current room */
        $room = $roomsRepository
        ->find($session->get("room_number"));

        /** @var Backpack $backpack Players backpack */
        $backpack = $session->get("backpack");

        /** @var array<Items> $items Items in current room */
        $items = $itemsRepository
        ->findBy(array('room_id' => $session->get("room_number")));

        /** @var array<Items> $allItems All items in database */
        $allItems = $itemsRepository
        ->findAll();

        if ($request->request->get('command') != null) {
            /**
             * @var string $command What user has written
             */
            $command = $request->request->get('command');

            $actions = new Actions($entityManager);

            list($message, $newRoom, $updatedBackpack) = $actions
            ->checkAction($command, $room, $items, $allItems, $backpack);

            $session->set("backpack", $updatedBackpack);
            $session->set("room_number", $newRoom);
            $room = $roomsRepository
                ->find($session->get("room_number"));

            $session->set("message", $message);
        }

        $data = [
            "room_number" => $session->get("room_number"),
            "room" => $room,
            "backpack" => $backpack->getItems(),
            "message" => $session->get("message")
        ];

        return $this->render('proj/game.html.twig', $data);
    }

    // #[Route('/proj/add', name: 'proj_add', methods: ['GET', 'POST'])]
    // public function addProj(
    //     ManagerRegistry $doctrine,
    //     Request $request
    // ): Response {
    //     $entityManager = $doctrine->getManager();


    //     $item = new Items();
    //     $item->setItemId("test1");
    //     $item->setItemName("test");
    //     $item->setDescription("test");
    //     $item->setUseDesc("test");
    //     $item->setRoomId(0);

    //     $entityManager->persist($item);

    //     $entityManager->flush();

    //     return $this->redirectToRoute('proj');
    //     // return $this->render('proj/add.html.twig');
    // }

    #[Route("/proj/about", name: "proj_about")]
    public function projAbout(): Response
    {
        return $this->render('proj/about.html.twig');
    }

    #[Route("/proj/about/database", name: "proj_database")]
    public function projDatabase(): Response
    {
        return $this->render('proj/database.html.twig');
    }

    #[Route("/proj/cheat", name: "proj_cheat")]
    public function projCheat(): Response
    {
        return $this->render('proj/cheat.html.twig');
    }

    #[Route("/proj/api", name: "proj_api")]
    public function projApi(): Response
    {
        return $this->render('proj/api.html.twig');
    }

    // #[Route("/proj/reset", name: "proj_reset")]
    // public function projReset(
    //     ManagerRegistry $doctrine
    // ): Response
    // {
    //     /** @var Connection $connection */
    //     $connection = $doctrine->getConnection();

    //     $file = '../var/backup.sql';
    //     $sql = '
    //         DROP TABLE IF EXISTS product;
    //         DROP TABLE IF EXISTS book;
    //         DROP TABLE IF EXISTS rooms;
    //         DROP TABLE IF EXISTS items;
    //         DROP TABLE IF EXISTS doctrine_migration_versions;
    //         DROP TABLE IF EXISTS messenger_messages;
    //     ' . file_get_contents($file);

    //     $connection->executeStatement($sql);
    //     $doctrine->getManager()->flush();

    //     return $this->redirectToRoute('proj');
    // }
}

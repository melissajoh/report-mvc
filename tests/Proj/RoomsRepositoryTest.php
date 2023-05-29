<?php

namespace App\Repository;

use App\Entity\Rooms;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class RoomsRepositoryTest extends KernelTestCase
{
    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $entityManager;

    protected function setUp(): void
    {
        $kernel = self::bootKernel();

        /** @phpstan-ignore-next-line */
        $this->entityManager = $kernel->getContainer()
            ->get('doctrine')
            ->getManager();
    }

    public function testSearchByName(): void
    {
        /**
         * @var Rooms
         */
        $room = $this->entityManager
            ->getRepository(Rooms::class)
            ->findOneBy(['room_id' => 1])
        ;

        $this->assertSame('Stugan', $room->getRoomName());
    }

    public function testSaveAndRemove(): void
    {
        $room = new Rooms ();
        $room->setRoomName("Hej");
        $room->setDescription("hej");

        /**
         * @var RoomsRepository
         */
        $rep = $this->entityManager
        ->getRepository(Rooms::class);

        $rep->save($room, true)
        ;

        $res = $this->entityManager
        ->getRepository(Rooms::class)
        ->findAll();

        $this->assertContains($room, $res);

        /**
         * @var RoomsRepository
         */
        $rep = $this->entityManager
        ->getRepository(Rooms::class);

        $rep->remove($room, true)
        ;

        $res = $this->entityManager
        ->getRepository(Rooms::class)
        ->findAll();

        $this->assertNotContains($room, $res);
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        $this->entityManager->close();
        // $this->entityManager = null;
    }
}
<?php

namespace App\Repository;

use App\Entity\Items;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class ItemsRepositoryTest extends KernelTestCase
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
         * @var Items
         */
        $item = $this->entityManager
            ->getRepository(Items::class)
            ->findOneBy(['item_id' => 'bultsax1'])
        ;

        $this->assertSame('Bultsax', $item->getItemName());
    }

    public function testSaveAndRemove(): void
    {
        $item = new Items();
        $item->setItemId("hej1");
        $item->setItemName("Hej");
        $item->setDescription("hej");
        $item->setUseDesc("hej");
        $item->setRoomId(0);

        /**
         * @var ItemsRepository
         */
        $rep = $this->entityManager
        ->getRepository(Items::class);

        $rep->save($item, true)
        ;

        $res = $this->entityManager
        ->getRepository(Items::class)
        ->findAll();

        $this->assertContains($item, $res);

        /**
         * @var ItemsRepository
         */
        $rep = $this->entityManager
        ->getRepository(Items::class);

        $rep->remove($item, true)
        ;

        $res = $this->entityManager
        ->getRepository(Items::class)
        ->findAll();

        $this->assertNotContains($item, $res);
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        $this->entityManager->close();
        // $this->entityManager = null;
    }
}
<?php

namespace App\Repository;

use App\Entity\Book;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class BookRepositoryTest extends KernelTestCase
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
         * @var Book
         */
        $book = $this->entityManager
            ->getRepository(Book::class)
            ->findOneBy(['id' => '1'])
        ;

        $this->assertSame('Den påhittade boken', $book->getTitle());
    }

    public function testSave(): void
    {
        $book = new Book();
        $book->setTitle("Hej");
        $book->setIsbn("9102910");
        $book->setAuthor("Test Testsson");

        /**
         * @var BookRepository
         */
        $rep = $this->entityManager
        ->getRepository(Book::class);

        $rep->save($book, true)
        ;

        $res = $this->entityManager
        ->getRepository(Book::class)
        ->findAll();

        $this->assertContains($book, $res);
    }

    public function testRemove(): void
    {
        $book = new Book();
        $book->setTitle("Hej");
        $book->setIsbn("9102910");
        $book->setAuthor("Test Testsson");

        /**
         * @var BookRepository
         */
        $rep = $this->entityManager
        ->getRepository(Book::class);

        $rep->save($book, true)
        ;

        $res = $this->entityManager
        ->getRepository(Book::class)
        ->findAll();

        $this->assertContains($book, $res);

        /**
         * @var BookRepository
         */
        $rep = $this->entityManager
        ->getRepository(Book::class);

        $rep->remove($book, true)
        ;

        $res = $this->entityManager
        ->getRepository(Book::class)
        ->findAll();

        $this->assertNotContains($book, $res);
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        $this->entityManager->close();
        // $this->entityManager = null;
    }
}
<?php

namespace App\Entity;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class Book
 */
class BookTest extends TestCase
{
    /**
     * Construct object and verify that the object has the expected
     * properties, use no arguments
     */
    public function testCreateBook(): void
    {
        $book = new Book();
        $this->assertInstanceOf("\App\Entity\Book", $book);

        $res = $book->getId();
        $this->assertEmpty($res);
    }

    /**
     * Set title of book and check if it is set
     */
    public function testSetTitle(): void
    {
        $book = new Book();
        $book->setTitle("Hej");
        $res = $book->getTitle();
        $this->assertEquals($res, "Hej");
    }

    /**
     * Set isbn of book and check if it is set
     */
    public function testSetIsbn(): void
    {
        $book = new Book();
        $book->setIsbn("19023");
        $res = $book->getIsbn();
        $this->assertEquals($res, "19023");
    }

    /**
     * Set author of book and check if it is set
     */
    public function testSetAuthor(): void
    {
        $book = new Book();
        $book->setAuthor("Test Testsson");
        $res = $book->getAuthor();
        $this->assertEquals($res, "Test Testsson");
    }

    /**
     * Set image of book and check if it is set
     */
    public function testSetImage(): void
    {
        $book = new Book();
        $book->setImage("image");
        $res = $book->getImage();
        $this->assertEquals($res, "image");
    }
}

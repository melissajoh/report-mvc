<?php

namespace App\Card;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class DeckOfCards
 */
class DeckOfCardsTest extends TestCase
{
    /**
     * Construct object and verify that the object has the expected
     * properties, with argument
     */
    public function testCreateDeckOfCards(): void
    {
        $card = new Card();
        $deck = new DeckOfCards($card);
        $this->assertInstanceOf("\App\Card\DeckOfCards", $deck);

        $res = $deck->getNrOfCards();
        $this->assertEquals(52, $res);
    }

    /**
     * Construct object and verify that the object has expected
     * properties, no arguments
     */
    public function testCreateDeckOfCardsNoArgs(): void
    {
        $deck = new DeckOfCards();
        $this->assertInstanceOf("\App\Card\DeckOfCards", $deck);

        $res = $deck->getNrOfCards();
        $this->assertEquals(52, $res);
    }

    /**
     * Shuffle deck and see that it is not the same order as before
     */
    public function testShuffleDeck(): void
    {
        $card = new Card();
        $deck = new DeckOfCards($card);
        $firstDeck = clone $deck;
        $secondDeck = $deck->shuffleDeck();
        $this->assertNotEquals($firstDeck, $secondDeck);
    }

    /**
     * Draw one card at a time from deck, removing that card from
     * the deck
     */
    public function testDrawOneCardFromDeck(): void
    {
        $card = new Card();
        $deck = new DeckOfCards($card);
        $res = $deck->draw();
        $this->assertIsString($res);

        $res2 = $deck->draw();
        $this->assertNotEquals($res, $res2);

        $this->assertNotContains($res, $deck->getCards());
        $this->assertNotContains($res2, $deck->getCards());
        $this->assertEquals(50, $deck->getNrOfCards());

        $deck->removeCards(range(0, 51));
        $res = $deck->draw();
        $this->assertEquals("", $res);
    }
    
    /**
     * Get number of cards from deck and get string representations
     * of cards
     */
    public function testGetMethodsForDeck(): void
    {
        $deck = new DeckOfCards();
        $res = $deck->getNrOfCards();
        $this->assertEquals(52, $res);

        $res = $deck->getCards();
        $this->assertIsArray($res);
        $this->assertContains('[0]', $res);
        $this->assertContains('[14]', $res);
    }

    /**
     * Remove several cards from deck at a time
     */
    public function testRemoveSeveralCardsFromDeck(): void
    {
        $card = new Card();
        $card->initCard(1);
        $card2 = new Card();
        $card2->initCard(2);
        $card3 = new Card();
        $card3->initCard(3);
        $deck = new DeckOfCards();
        $hand = new CardHand();
        $hand->add($card);
        $hand->add($card2);
        $hand->add($card3);

        $this->assertEquals(52, $deck->getNrOfCards());

        $deck->removeCards($hand->getValues());
        $this->assertEquals(49, $deck->getNrOfCards());
    }
}

<?php

namespace App\Card;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class CardHand
 */
class CardHandTest extends TestCase
{
    /**
     * Construct object and verify that the object has the expected
     * properties, use no arguments
     */
    public function testCreateCardHand(): void
    {
        $hand = new CardHand();
        $this->assertInstanceOf("\App\Card\CardHand", $hand);

        $res = $hand->getHandString();
        $this->assertIsArray($res);
        $this->assertEquals([], $res);
    }

    /**
     * Add cards to variable hand and handString
     */
    public function testAddToHand(): void
    {
        $hand = new CardHand();
        $card = new Card();
        $card->initCard(1);
        $hand->add($card);
        $this->assertNotEmpty($hand->getValues());

        $hand->addString($card->getAsString());
        $res = $hand->getHandString();
        $this->assertIsArray($res);

        $exp = "[1]";
        $res = $hand->getString();
        $this->assertContains($exp, $res);
    }

    /**
     * Clear variable hand and handString from cards
     */
    public function testClearHandOnHandString(): void
    {
        $hand = new CardHand();
        $card = new Card();
        $hand->addString($card->getAsString());
        $this->assertNotEmpty($hand);

        $res = $hand->clearHand();
        $this->assertEmpty($res);

        $hand->add($card);
        $this->assertNotEmpty($hand);

        $res = $hand->clearHand();
        $this->assertEmpty($res);
    }

    /**
     * Init card deck, add cards to hand and
     * draw hand of cards from deck
     */
    public function testDrawHandOfCardsFromDeck(): void
    {
        $hand = new CardHand();
        $card = new Card();
        $card2 = new Card();
        $deck = new DeckOfCards($card);

        $hand->add($card);
        $hand->add($card2);
        $hand->draw($deck);
        $this->assertCount(2, $hand->getValues());
    }

    /**
     * Add cards to hand and check that getNrOfCards returns
     * correct number
     */
    public function testGetNrOfCards(): void
    {
        $hand = new CardHand();
        $card = new Card();
        $card2 = new Card();

        $hand->add($card);
        $hand->add($card2);

        $exp = 2;
        $res = $hand->getNrOfCards();
        $this->assertEquals($exp, $res);
    }
}

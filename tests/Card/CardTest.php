<?php

namespace App\Card;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class Card
 */
class CardTest extends TestCase
{
    /**
     * Construct object and verify that the object has the expected
     * properties, use no arguments
     */
    public function testCreateCard(): void
    {
        $card = new Card();
        $this->assertInstanceOf("\App\Card\Card", $card);

        $res = $card->getValue();
        $this->assertEmpty($res);
    }

    /**
     * Initiate a card with a value and check that it has expected
     * properties, value and string representation
     */
    public function testInitCard(): void
    {
        $card = new Card();
        $card->initCard(1);

        $exp = "[1]";
        $res = $card->getAsString();
        $this->assertEquals($exp, $res);

        $exp = 1;
        $res = $card->getValue();
        $this->assertEquals($exp, $res);
    }
}

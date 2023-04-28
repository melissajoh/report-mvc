<?php

namespace App\Card;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class CardGraphic
 */
class CardGraphicTest extends TestCase
{
    /**
     * Construct object and verify that the object has the expected
     * properties, use no arguments
     */
    public function testCreateCardGraphic(): void
    {
        $card = new CardGraphic();
        $this->assertInstanceOf("\App\Card\CardGraphic", $card);

        $res = $card->getValue();
        $this->assertEmpty($res);
    }

    /**
     * Initiate CardGraphic and get string representation
     */
    public function testGetAsString(): void
    {
        $card = new CardGraphic();
        $card->initCard(0);
        $res = $card->getAsString();
        $this->assertEquals('🂡', $res);
    }
}

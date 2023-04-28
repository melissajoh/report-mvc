<?php

namespace App\Card;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class Player
 */
class PlayerTest extends TestCase
{
    /**
     * Construct object and verify that the object has the expected
     * properties, use no arguments
     */
    public function testCreatePlayer(): void
    {
        $player = new Player();
        $this->assertInstanceOf("\App\Card\Player", $player);

        $res = $player->getScore();
        $this->assertEquals(0, $res);

        $res2 = $player->getCurrency();
        $this->assertEquals(100, $res2);
    }

    /**
     * Test add and reset score
     */
    public function testScoreMethods(): void
    {
        $player = new Player();
        $scoreToAdd = 20;
        $player->addScore($scoreToAdd);
        $res = $player->getScore();
        $this->assertEquals($scoreToAdd, $res);

        $res2 = $player->resetScore();
        $this->assertEquals(0, $res2);
    }

    /** Test add and remove currency */
    public function testCurrencyMethods(): void
    {
        $player = new Player();
        $currency = 20;
        $player->addCurrency($currency);
        $res = $player->getCurrency();
        $this->assertEquals(100 + $currency, $res);

        $res2 = $player->removeCurrency($currency);
        $this->assertEquals(100, $res2);

        $res3 = $player->removeCurrency(200);
        $this->assertEquals(0, $res3);
    }
}

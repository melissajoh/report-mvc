<?php

namespace App\Card;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class GameBoard
 */
class GameBoardTest extends TestCase
{
    /**
     * Construct object and verify that the object has the expected
     * properties, use no arguments
     */
    public function testCreateGameBoard(): void
    {
        $game = new GameBoard();
        $this->assertInstanceOf("\App\Card\GameBoard", $game);

        $res = $game->checkEmptyDeck();
        $this->assertNull($res);
        $this->assertNotTrue($res);

        $player = $game->getPlayer();
        $bank = $game->getBank();
        $this->assertInstanceOf("\App\Card\Player", $player);
        $this->assertInstanceOf("\App\Card\Player", $bank);
    }

    /**
     * Draw one card at a time from deck, removing drawn card
     */
    public function testDrawOneCard(): void
    {
        $game = new GameBoard();
        $game->draw();
        $res = $game->getDeck();
        $this->assertCount(51, $res);
    }

    /**
     * Player draws cards to play, one card for each draw,
     * adds to hand
     */
    public function testPlayerDraws(): void
    {
        $game = new GameBoard();
        $game->playerDraws();
        $res = clone $game->getHand();
        $this->assertNotEmpty($res);

        $game->playerDraws();
        $res2 = $game->getHand();
        $this->assertNotEmpty($res2);
        $this->assertNotEquals($res, $res2);
    }

    /**
     * Bank draws cards to play, full hand.
     * Dumb and smart
     */
    public function testBankDraws(): void
    {
        $game = new GameBoard();
        $game->bankDraws();
        $res = $game->getBankHand()->getHandString();
        $score = $game->getBank()->getScore();
        $this->assertIsArray($res);
        $this->assertGreaterThanOrEqual(17, $score);

        $gameSmarter = new GameBoard();
        $gameSmarter->bankDrawsSmarter();
        $scoreSmarter = $gameSmarter->getBank()->getScore();
        $statistics = $gameSmarter->getStatistics($scoreSmarter);
        $this->assertLessThanOrEqual(40, $statistics);
    }

    /**
     * Ending game round and showing winner
     */
    public function testEndGame(): void
    {
        $game = new GameBoard();
        $stub = $this->createMock(Player::class);
        $stub->method('getScore')
            ->willReturn(20);
        $res = $game->endGame();
        $this->assertEquals("Banken vann denna runda!", $res);

        $res = $game->endGame(21, 20);
        $this->assertEquals("Banken vann denna runda!", $res);

        $res = $game->endGame(20, 21);
        $this->assertEquals("Spelaren vann denna runda!", $res);
    }

    /**
     * Confirm that statistics are shown on cards remaining in deck
     */
    public function testStatistics(): void
    {
        $game = new GameBoard();
        $res = $game->getStatistics(0);
        $this->assertIsFloat($res);
        $this->assertEquals(100.0, $res);

        $res2 = $game->getStatistics(10);
        $this->assertNotEquals($res, $res2);
    }

    /**
     * Check that deck is empty and returns true if so
     */
    public function testEmptyDeck(): void
    {
        $game = new GameBoard();
        $deck = [];
        $res = $game->checkEmptyDeck($deck);
        $this->assertTrue($res);
    }
}

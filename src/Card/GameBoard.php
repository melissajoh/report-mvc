<?php

namespace App\Card;

/**
 * A game board for card game 21
 */
class GameBoard
{
    /**
     * @var DeckOfCards $deck holding all cards
     * @var Player $player The person playing
     * @var Player $bank The bank (computer)
     * @var CardHand $hand Hand holding cards drawn from deck
     * @var string $drawnCard Card drawn from deck
     */
    private DeckOfCards $deck;
    private Player $player;
    private Player $bank;
    private CardHand $hand;
    private string $drawnCard = "";

    /**
     * Constructor initiating game board
     */
    public function __construct()
    {
        $card = new CardGraphic();
        $this->deck = new DeckOfCards($card);
        $this->player = new Player();
        $this->bank = new Player();
        $this->hand = new CardHand();
        $this->deck->shuffleDeck();
    }

    /**
     * Method to draw one card at a time from deck
     */
    public function draw(): void
    {
        $this->drawnCard = $this->deck->draw();
        unset($this->deck->getCards()[$this->drawnCard]);
    }

    /**
     * Get drawn card
     * @return string representing drawn card
     */
    public function getDrawnCard()
    {
        return $this->drawnCard;
    }

    /**
     * Get player
     * @return Player Person playing
     */
    public function getPlayer()
    {
        return $this->player;
    }

    /**
     * Get bank player
     * @return Player The bank
     */
    public function getBank()
    {
        return $this->bank;
    }

    /**
     * Get hand
     * @return CardHand holding drawn cards
     */
    public function getHand()
    {
        return $this->hand;
    }

    /**
     * Calculate player's score
     * @param string $card String representing card
     * @param int $playerScore player's total score at the time
     * @return int $score How many points the card is worth
     */
    public function calculateScore(string $card, int $playerScore)
    {
        $spades = ['🂡', '🂢', '🂣', '🂤', '🂥', '🂦', '🂧', '🂨', '🂩', '🂪', '🂫', '🂭', '🂮'];
        $hearts = ['🂱', '🂲', '🂳', '🂴', '🂵', '🂶', '🂷', '🂸', '🂹', '🂺', '🂻', '🂽', '🂾'];
        $diamonds = ['🃁', '🃂', '🃃', '🃄', '🃅', '🃆', '🃇', '🃈', '🃉', '🃊', '🃋', '🃍', '🃎'];
        $clubs = ['🃑', '🃒', '🃓', '🃔', '🃕', '🃖', '🃗', '🃘', '🃙', '🃚', '🃛', '🃝', '🃞'];
        $score = 0;

        if (in_array($card, $spades)) {
            $index = array_search($card, $spades);
            $score = $index + 1;
            if ($index === 0 && $playerScore <= 7) {
                $score = 14;
            }
        } elseif (in_array($card, $hearts)) {
            $index = array_search($card, $hearts);
            $score = $index + 1;
            if ($index === 0 && $playerScore <= 7) {
                $score = 14;
            }
        } elseif (in_array($card, $diamonds)) {
            $index = array_search($card, $diamonds);
            $score = $index + 1;
            if ($index === 0 && $playerScore <= 7) {
                $score = 14;
            }
        } elseif (in_array($card, $clubs)) {
            $index = array_search($card, $clubs);
            $score = $index + 1;
            if ($index === 0 && $playerScore <= 7) {
                $score = 14;
            }
        }

        return $score;
    }

    /**
     * Method for player drawing cards from deck
     * @return CardHand array with player's cards
     */
    public function playerDraws()
    {
        $this->draw();
        $score = $this->calculateScore($this->getDrawnCard(), $this->player->getScore());
        $this->player->addScore($score);
        $this->hand->addString($this->getDrawnCard());
        return $this->hand;
    }

    /**
     * Method for the bank drawing cards from deck
     * @return CardHand array with the bank's cards
     */
    public function bankDraws()
    {
        // $card = new CardGraphic();
        // $this->deck = new DeckOfCards($card);
        // $this->deck->shuffleDeck();
        while ($this->bank->getScore() < 17) {
            $this->draw();
            $score = $this->calculateScore($this->getDrawnCard(), $this->bank->getScore());
            $this->bank->addScore($score);
            $this->hand->addString($this->getDrawnCard());
        }
        return $this->hand;
    }

    /**
     * Check who has won the round
     * @return string|void with winner
     */
    public function endGame()
    {
        // if ($this->player->getScore() > 21) {
        //     return "Banken vann";
        // } else
        if ($this->bank->getScore() > 21) {
            return 'Spelaren vann denna runda!';
        } elseif ($this->player->getScore() == $this->bank->getScore()) {
            return 'Banken vann denna runda!';
        } elseif ($this->player->getScore() > $this->bank->getScore()) {
            return 'Spelaren vann denna runda!';
        } elseif ($this->player->getScore() < $this->bank->getScore()) {
            return 'Banken vann denna runda!';
        }
    }
}

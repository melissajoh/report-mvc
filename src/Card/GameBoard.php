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
     * @var CardHand $hand Hand holding player cards drawn from deck
     * @var CardHand $bankHand Hand holding bank cards drawn from deck
     * @var string $drawnCard Card drawn from deck
     */
    private DeckOfCards $deck;
    private Player $player;
    private Player $bank;
    private CardHand $hand;
    private CardHand $bankHand;
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
        $this->bankHand = new CardHand();
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
     * Get deck
     * @return array<string>
     */
    public function getDeck(): array
    {
        return $this->deck->getCards();
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
     * Get bank hand
     * @return CardHand holding drawn cards
     */
    public function getBankHand()
    {
        return $this->bankHand;
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
        $index = -1;

        if (in_array($card, $spades)) {
            $index = array_search($card, $spades);
        } elseif (in_array($card, $hearts)) {
            $index = array_search($card, $hearts);
        } elseif (in_array($card, $diamonds)) {
            $index = array_search($card, $diamonds);
        } elseif (in_array($card, $clubs)) {
            $index = array_search($card, $clubs);
        }

        $score = $index + 1;

        if ($index === 0 && $playerScore <= 7) {
            $score = 14;
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
            $this->bankHand->addString($this->getDrawnCard());
        }
        return $this->bankHand;
    }

    /**
     * Method for bank drawing cards from deck smarter
     * @return CardHand array with the bank's cards
     */
    public function bankDrawsSmarter()
    {
        while ($this->getStatistics($this->bank->getScore()) > 40) {
            $this->draw();
            $score = $this->calculateScore($this->getDrawnCard(), $this->bank->getScore());
            $this->bank->addScore($score);
            $this->bankHand->addString($this->getDrawnCard());
        }
        return $this->bankHand;
    }

    /**
     * Check who has won the round
     * @return string|void with winner
     */
    public function endGame(int $bankScore = null, int $playerScore = null)
    {
        if ($bankScore === null || $playerScore === null) {
            $bankScore = $this->bank->getScore();
            $playerScore = $this->player->getScore();
        }

        if ($bankScore > 21
        || $playerScore > $bankScore) {
            return 'Spelaren vann denna runda!';
        } elseif ($playerScore == $bankScore
        || $playerScore < $bankScore) {
            return 'Banken vann denna runda!';
        }
    }

    /**
     * Close whole game if deck is empty or currency is 0
     * @param mixed $playerCurrency
     * @param mixed $bankCurrency
     * @return void
     */
    public function closeGame(mixed $playerCurrency, mixed $bankCurrency)
    {
        if ($this->checkEmptyDeck() === true or $playerCurrency == 0 or $bankCurrency == 0) {
            $_SESSION['_sf2_attributes']['closeGame'] = true;
        }
    }

    /**
     * Check if deck is empty
     * @param array<string>|null $deck optional deck input
     * @return bool|void true if deck is empty
     */
    public function checkEmptyDeck(array $deck = null)
    {
        if ($deck === null) {
            $deck = $this->deck->getCards();
        }
        if ($deck === []) {
            return true;
        }
    }

    /**
     * Get statistics on likelyness to not get score over 21 with next card.
     * 100 means a 100% chance to get a score under 21.
     * The higher the number the better.
     * @param int $score Player's current score
     * @return int|float $chance in percent
     */
    public function getStatistics(int $score)
    {
        $cardsUnderLimit = 0;
        foreach ($this->deck->getCards() as $card) {
            $cardScore = $this->calculateScore($card, $score);
            if ($cardScore <= (21 - $score)) {
                $cardsUnderLimit += 1;
            }
        }

        $chance = 0;
        if ($this->deck->getCards() != []) {
            $chance = ($cardsUnderLimit / count($this->deck->getCards())) * 100;
        }

        return round($chance);
    }

    /**
     * Checks if player score goes over 21 or is 21
     * @return string|void
     */
    public function checkPlayerScore()
    {
        if ($this->player->getScore() > 21) {
            return $_SESSION['_sf2_attributes']['flash'] = 'Banken vann denna runda!';
        } elseif ($this->player->getScore() === 21) {
            return $_SESSION['_sf2_attributes']['flash'] = 'Spelaren vann denna runda!';
        }
    }
}

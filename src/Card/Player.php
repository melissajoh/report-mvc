<?php

namespace App\Card;

/**
 * A player for card game
 */
class Player
{
    /**
     * @var int $score Amount of points player has
     */
    protected int $score;
    protected int $currency;

    /**
     * Constructor initiating player with 0 points
     */
    public function __construct()
    {
        $this->score = 0;
        $this->currency = 100;
    }

    /**
     * Add points to total score
     * @param int $points to add
     */
    public function addScore(int $points): void
    {
        $this->score += $points;
    }

    /**
     * Get player score
     * @return int score
     */
    public function getScore(): int
    {
        return $this->score;
    }

    /**
     * Reset player score
     * @return int score 0
     */
    public function resetScore(): int
    {
        $this->score = 0;
        return $this->score;
    }

    /**
     * Get currency
     * @return int currency
     */
    public function getCurrency(): int
    {
        return $this->currency;
    }

    /**
     * Add currency
     * @param int $bet currency to add
     * @return int currency after add
     */
    public function addCurrency(int $bet): int
    {
        $this->currency = $this->currency + $bet;
        return $this->currency;
    }

    /**
     * Remove currency
     * @param int $bet currency to remove
     * @return int currency after remove
     */
    public function removeCurrency(int $bet): int
    {
        $this->currency = $this->currency - $bet;
        if ($this->currency < 0) {
            $this->currency = 0;
        }
        return $this->currency;
    }
}

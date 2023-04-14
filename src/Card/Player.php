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

    /**
     * Constructor initiating player with 0 points
     */
    public function __construct()
    {
        $this->score = 0;
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
}

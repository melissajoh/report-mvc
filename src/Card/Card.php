<?php

namespace App\Card;

/**
 * A playing card
 */
class Card
{
    /**
     * @var int $value Value of card
     */
    protected int | null $value;

    /**
     * Constructor initiating card with null value
     */
    public function __construct()
    {
        $this->value = null;
    }

    /**
     * Method initating a card with given value
     * @param int $cardNr Value for card
     * @return Card with value
     */
    public function initCard(int $cardNr): Card
    {
        $this->value = $cardNr;
        return $this;
    }

    /**
     * Get value of card
     * @return int|null value of card as integer
     */
    public function getValue(): int|null
    {
        return $this->value;
    }

    /**
     * Get value of card as string
     * @return string represention of card value
     */
    public function getAsString(): string
    {
        return "[{$this->value}]";
    }
}

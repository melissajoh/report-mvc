<?php

namespace App\Card;

// use App\Card\Card;

/**
 * Hand of cards
 */
class CardHand
{
    /**
     * @var array<Card> $hand holding cards
     */
    private $hand = [];
    /**
     * @var array<string> $handString holding string representations of cards
     */
    private $handString = [];

    /**
     * Add cards to hand
     * @param Card $card to add
     */
    public function add(Card $card): void
    {
        $this->hand[] = $card;
    }

    /**
     * Add string representation of card to hand
     * @param string $card to add
     */
    public function addString(string $card): void
    {
        $this->handString[] = $card;
    }

    /**
     * Get hand with string representation of cards
     * @return array<string>
     */
    public function getHandString()
    {
        return $this->handString;
    }

    /**
     * Clearing hand of cards
     */
    public function clearHand(): void
    {
        unset($this->handString);
    }

    /**
     * Draw a hand from deck
     * @param DeckOfCards $deck to draw hand from
     */
    public function draw(DeckOfCards $deck): void
    {
        $cards = $deck->getCards();
        foreach ($this->hand as $c) {
            $cardNr = array_rand($cards);
            $c->initCard((int)$cardNr);
            unset($cards[$cardNr]);
        }
    }

    /**
     * Get number of cards in hand
     * @return int number of cards
     */
    public function getNrOfCards(): int
    {
        return count($this->hand);
    }

    /**
     * Get value of cards in hand
     * @return array<int|null> with int values of cards in hand
     */
    public function getValues(): array
    {
        $values = [];
        foreach ($this->hand as $card) {
            $values[] = $card->getValue();
        }
        return $values;
    }

    /**
     * Get each card in hand as string
     * @return array<string> with string values of card in hand
     */
    public function getString(): array
    {
        $values = [];
        foreach ($this->hand as $card) {
            $values[] = $card->getAsString();
        }
        return $values;
    }
}

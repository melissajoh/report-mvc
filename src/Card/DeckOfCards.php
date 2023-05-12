<?php

namespace App\Card;

/**
 * Deck of cards
 */
class DeckOfCards
{
    /**
     * @var array<string> holding cards
     */
    private $deck = [];
    // private $cardDeck = [];

    public function __construct(Card $card = new Card())
    {
        for ($i = 0; $i <= 51; $i++) {
            $this->deck[] = $card->initCard($i)->getAsString();
            // $this->cardDeck[] = $card->initCard($i);
        }
    }

    /**
     * Shuffle cards in deck
     * @return array<string> with shuffled deck
     */
    public function shuffleDeck(): array
    {
        shuffle($this->deck);
        return $this->deck;
    }

    /**
     * Draw one card from deck
     * @return string drawn card
     */
    public function draw(): string
    {
        if ($this->deck != []) {
            $cardNr = array_rand($this->deck);
            $cards = $this->deck;
            $card = $cards[$cardNr];

            unset($this->deck[$cardNr]);
            return $card;
        }
        return "";
    }

    /**
     * Get number of cards in deck
     * @return int number of cards
     */
    public function getNrOfCards(): int
    {
        $length = count($this->deck);
        return $length;
    }

    /**
     * Get cards
     * @return array<string> with string representations of cards from deck
     */
    public function getCards(): array
    {
        return $this->deck;
    }

    /**
     * Remove card from deck
     * @param array<integer|null> $cards of cards to remove
     */
    public function removeCards(array $cards): void
    {
        foreach ($cards as $c) {
            unset($this->deck[$c]);
        }
    }
}

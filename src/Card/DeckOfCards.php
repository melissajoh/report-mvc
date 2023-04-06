<?php

namespace App\Card;

// use App\Card\CardGraphic;

/**
 * Deck of cards
 */
class DeckOfCards
{
    /**
     * @var array holding cards
     */
    private $deck = [];
    // private $cardDeck = [];

    /**
     * Method initiating deck with cards
     * @param Card to add to deck
     * @return array with cards in deck
     */
    public function initDeck(Card $card): array
    {
        for ($i = 0; $i <= 51; $i++) {
            $this->deck[] = $card->initCard($i)->getAsString();
            // $this->cardDeck[] = $card->initCard($i);
        }
        return $this->deck;
    }

    /**
     * Shuffle cards in deck
     * @return array with shuffled deck
     */
    public function shuffleDeck(): array
    {
        shuffle($this->deck);
        return $this->deck;
    }

    /**
     * Draw one card from deck
     * @return string with drawn card
     */
    public function draw(): string
    {
        $cardNr = array_rand($this->deck);
        $cards = $this->deck;
        $card = $cards[$cardNr];

        unset($this->deck[$cardNr]);

        return $card;
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
     * @return array with string representations of cards from deck
     */
    public function getCards(): array
    {
        return $this->deck;
    }

    /**
     * Remove card from deck
     * @param array of cards to remove
     */
    public function removeCards(array $cards): void
    {
        foreach ($cards as $c) {
            unset($this->deck[$c]);
        }
    }
}

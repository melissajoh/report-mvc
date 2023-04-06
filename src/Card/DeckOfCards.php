<?php

namespace App\Card;

// use App\Card\CardGraphic;

class DeckOfCards
{
    private $deck = [];
    // private $cardDeck = [];

    public function initDeck(Card $card): array
    {
        for ($i = 0; $i <= 51; $i++) {
            $this->deck[] = $card->initCard($i)->getAsString();
            // $this->cardDeck[] = $card->initCard($i);
        }
        return $this->deck;
    }

    public function shuffleDeck(): array
    {
        shuffle($this->deck);
        return $this->deck;
    }

    public function draw(): string
    {
        $cardNr = array_rand($this->deck);
        $cards = $this->deck;
        $card = $cards[$cardNr];

        unset($this->deck[$cardNr]);

        return $card;
    }

    public function getNrOfCards(): int
    {
        $length = count($this->deck);
        return $length;
    }

    public function getCards(): array
    {
        return $this->deck;
    }

    public function removeCards(array $cards): void
    {
        foreach ($cards as $c) {
            unset($this->deck[$c]);
        }
    }
}

<?php

namespace App\Card;

// use App\Card\Card;

class CardHand
{
    private $hand = [];

    public function add(Card $card): void
    {
        $this->hand[] = $card;
    }

    public function draw(DeckOfCards $deck): void
    {
        $cards = $deck->getCards();
        foreach ($this->hand as $c) {
            $cardNr = array_rand($cards);
            $c->initCard($cardNr);
            unset($cards[$cardNr]);
        }
    }

    public function getNrOfCards(): int
    {
        return count($this->hand);
    }

    public function getValues(): array
    {
        $values = [];
        foreach ($this->hand as $card) {
            $values[] = $card->getValue();
        }
        return $values;
    }

    public function getString(): array
    {
        $values = [];
        foreach ($this->hand as $card) {
            $values[] = $card->getAsString();
        }
        return $values;
    }
}

<?php

namespace App\Controller;

use App\Card\CardGraphic;
use App\Card\CardHand;
use App\Card\DeckOfCards;
use App\Card\GameBoard;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Json controller for cards and card game 21
 */
class JsonCardController
{
    #[Route("/api/deck", name: "deck", methods: ['GET'])]
    public function jsonDeck(
        SessionInterface $session
    ): Response {
        if ($session->get("deck_of_cards") == null) {
            $card = new CardGraphic();
            $deck = new DeckOfCards($card);
            // $deck->initDeck($card);
            $session->set("deck_of_cards", $deck);
        }
        /**
         * @var DeckOfCards Current deck
         */
        $deck = $session->get("deck_of_cards");

        $data = [
            'deck' => $deck->getCards()
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
        );

        return $response;
    }

    #[Route("/api/deck/shuffle", name: "shuffle", methods: ['GET', 'POST'])]
    public function jsonShuffle(
        SessionInterface $session
    ): Response {
        $card = new CardGraphic();
        $deck = new DeckOfCards($card);
        // $deck->initDeck($card);
        $session->set("deck_of_cards", $deck);
        $shuffledDeck = clone $deck;
        $shuffledDeck->shuffleDeck();

        $data = [
            'deck' => $shuffledDeck->getCards()
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
        );
        return $response;
    }

    #[Route("/api/deck/draw", name: "draw", methods: ['GET', 'POST'])]
    public function jsonDraw(
        SessionInterface $session
    ): Response {
        /**
         * @var DeckOfCards Current deck
         */
        $deck = $session->get("deck_of_cards");

        $data = [
            "draw" => $deck->draw(),
            "count" => $deck->getNrOfCards()
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
        );
        return $response;
    }

    #[Route("/api/deck/draw/{num<\d+>}", name: "draw_many", methods: ['GET', 'POST'])]
    public function jsonDrawMany(
        int $num,
        SessionInterface $session
    ): Response {
        /**
         * @var DeckOfCards Current deck
         */
        $deck = $session->get("deck_of_cards");

        if ($num > $deck->getNrOfCards()) {
            throw new Exception("Deck is out of cards");
        }

        $hand = new CardHand();
        for ($i = 1; $i <= $num; $i++) {
            $card = new CardGraphic();
            $hand->add($card);
        }

        $hand->draw($deck);

        $deck->removeCards($hand->getValues());

        $data = [
            "count" => $deck->getNrOfCards(),
            "cardsDrawn" => $hand->getString(),
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
        );
        return $response;
    }

    #[Route("/api/game", name: "game", methods: ['GET', 'POST'])]
    public function jsonGame(
        SessionInterface $session
    ): Response {
        /**
         * @var GameBoard Current game of 21
         */
        $game = $session->get("game");

        $data = [
            "currentHand" => $game->getHand()->getHandString(),
            "playerPoints" => $game->getPlayer()->getScore(),
            "playerWins" => $session->get("player_won"),
            "playerCurrency" => $session->get("player_currency"),
            "bankPoints" => $game->getBank()->getScore(),
            "bankWins" => $session->get("bank_won"),
            "bankCurrency" => $session->get("bank_currency"),
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
        );
        return $response;
    }
}

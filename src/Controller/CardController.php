<?php

namespace App\Controller;

use App\Card\Card;
use App\Card\CardGraphic;
use App\Card\CardHand;
use App\Card\DeckOfCards;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Controller for cards (not actual game)
 */
class CardController extends AbstractController
{
    #[Route("/card", name: "card_home")]
    public function home(
        SessionInterface $session
    ): Response {
        if ($session->get("deck_of_cards") == null) {
            $card = new CardGraphic();
            $deck = new DeckOfCards($card);
            // $deck->initDeck($card);
            $session->set("deck_of_cards", $deck);
        }
        $deck = $session->get("deck_of_cards");

        return $this->render('card/home.html.twig');
    }

    #[Route("/card/deck", name: "card_deck")]
    public function deck(
        SessionInterface $session
    ): Response {
        /**
         * @var DeckOfCards Current deck
         */
        $deck = $session->get("deck_of_cards");

        $data = [
            "deck" => $deck->getCards()
        ];

        return $this->render('card/deck.html.twig', $data);
    }

    #[Route("/card/deck/shuffle", name: "card_shuffle")]
    public function shuffle(
        SessionInterface $session
    ): Response {
        $card = new CardGraphic();
        $deck = new DeckOfCards($card);
        // $deck->initDeck($card);
        $session->set("deck_of_cards", $deck);
        $shuffledDeck = clone $deck;
        $data = [
            "shuffled" => $shuffledDeck->shuffleDeck()
        ];

        return $this->render('card/shuffle.html.twig', $data);
    }

    #[Route("/card/deck/draw", name: "card_draw")]
    public function draw(
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

        return $this->render('card/draw.html.twig', $data);
    }

    #[Route("/card/deck/draw/{num<\d+>}", name: "draw_num_cards")]
    public function drawCards(
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

        return $this->render('card/draw_many.html.twig', $data);
    }
}

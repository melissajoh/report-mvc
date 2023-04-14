<?php

namespace App\Controller;

use App\Card\Card;
use App\Card\CardGraphic;
use App\Card\CardHand;
use App\Card\DeckOfCards;
use App\Card\GameBoard;
use App\Card\Player;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpKernel\Exception;
use Symfony\Component\Routing\Annotation\Route;

class GameController extends AbstractController
{
    #[Route("/game", name: "game_home")]
    public function gameHome(
        SessionInterface $session
    ): Response {
        $game = new GameBoard();
        $session->set("game", $game);
        $session->set("flash", null);
        $session->set("bank_won", 0);
        $session->set("player_won", 0);
        return $this->render('game/home.html.twig');
    }

    #[Route("/game/doc", name: "game_doc")]
    public function doc(
        SessionInterface $session
    ): Response {

        return $this->render('game/doc.html.twig');
    }

    #[Route("/game/play", name: "game_play")]
    public function play(
        SessionInterface $session
    ): Response {
        if ($session->get("game") == null) {
            $game = new GameBoard();
            $session->set("game", $game);
        }
        $game = $session->get("game");

        // var_dump($game);
        // var_dump($game->getHand()->getHandString());

        $playerScore = $game->getPlayer()->getScore();
        $session->set("player_score", $playerScore);

        $bankScore = $game->getBank()->getScore();
        $session->set("bank_score", $bankScore);

        $playerWon = $session->get("player_won");
        $bankWon = $session->get("bank_won");

        if ($playerScore > 21) {
            $session->set("flash", 'Du fick över 21. Banken vann denna runda!');
            $this->addFlash(
                'lost',
                'Du fick över 21. Banken vann denna runda!'
            );
            $session->set("bank_won", $bankWon +1);
        } elseif ($playerScore === 21) {
            $session->set("flash", 'Du fick 21. Spelaren vann denna runda!');
            $this->addFlash(
                'won',
                'Du fick 21. Spelaren vann denna runda!'
            );
            $session->set("player_won", $playerWon +1);
        }

        if ($session->get("flash") != null) {
            if ($session->get("flash") == "Banken vann denna runda!") {
                $this->addFlash(
                    'lost',
                    $session->get("flash")
                );
                $session->set("bank_won", $bankWon +1);
            } elseif ($session->get("flash") == "Spelaren vann denna runda!") {
                $this->addFlash(
                    'won',
                    $session->get("flash")
                );
                $session->set("player_won", $playerWon +1);
            }
        }

        $session->set("hand", $game->getHand()->getHandString());

        $data = [
            "card" => $game->getDrawnCard(),
            "hand" => $game->getHand()->getHandString(),
            "player" => $session->get("player_score"),
            "bank" => $session->get("bank_score"),
            "flash" => $session->get("flash"),
            "player_won" => $session->get("player_won"),
            "bank_won" => $session->get("bank_won")
        ];

        return $this->render('game/play.html.twig', $data);
    }

    #[Route("/game/draw", name: "game_draw", methods: ['POST'])]
    public function draw(
        SessionInterface $session
    ): Response {
        $game = $session->get("game");
        $game->playerDraws();
        $session->set("game", $game);

        return $this->redirectToRoute('game_play');
    }

    #[Route("/game/save", name: "game_save", methods: ['POST'])]
    public function save(
        SessionInterface $session
    ): Response {
        $playerScore = $session->get("player_score");

        $game = $session->get("game");
        $game->getHand()->clearHand();

        $bankScore = $game->bankDraws();
        $session->set("bank_score", $bankScore);

        $session->set("flash", $game->endGame());

        return $this->redirectToRoute('game_play');
    }

    #[Route("/game/rematch", name: "game_rematch", methods: ['POST'])]
    public function rematch(
        SessionInterface $session
    ): Response {
        $game = $session->get("game");
        $session->set("player_score", $game->getPlayer()->resetScore());
        $session->set("bank_score", $game->getBank()->resetScore());
        $session->set("hand", $game->getHand()->clearHand());
        $session->set("flash", null);

        return $this->redirectToRoute('game_play');
    }
}

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

/**
 * Card game 21
 */
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
        $session->set("bank_currency", $game->getBank()->getCurrency());
        $session->set("player_currency", $game->getPlayer()->getCurrency());
        $session->set("closeGame", false);
        return $this->render('game/home.html.twig');
    }

    #[Route("/game/doc", name: "game_doc")]
    public function doc(): Response
    {
        return $this->render('game/doc.html.twig');
    }

    #[Route("/game/init", name: "game_init", methods: ['POST', 'GET'])]
    public function init(
        Request $request,
        SessionInterface $session
    ): Response {
        $session->set("flash", null);
        $bet = $request->request->get('bet');

        $session->set("bet", $bet);
        $session->set("which_bank", $request->request->get("bank"));

        return $this->redirectToRoute('game_play');
    }

    #[Route("/game/play", name: "game_play")]
    public function play(
        SessionInterface $session
    ): Response {
        if ($session->get("game") == null) {
            $game = new GameBoard();
            $session->set("game", $game);
        }

        /**
         * @var GameBoard $game Current game of 21
         */
        $game = $session->get("game");

        /**
         * @var int Bet
         */
        $bet = $session->get("bet");

        /**
         * Score and rounds won
         */
        $session->set("player_score", $game->getPlayer()->getScore());
        $session->set("bank_score", $game->getBank()->getScore());

        $playerWon = $session->get("player_won");
        $bankWon = $session->get("bank_won");

        /**
         * Flash messages and dealing with currency
         */
        $game->checkPlayerScore();

        if ($session->get("flash") == "Banken vann denna runda!") {
            $this->addFlash(
                'lost',
                $session->get("flash")
            );
            $session->set("bank_won", $bankWon +1);
            $session->set("bank_currency", $game->getBank()->addCurrency($bet));
            $session->set("player_currency", $game->getPlayer()->removeCurrency($bet));
        } elseif ($session->get("flash") == "Spelaren vann denna runda!") {
            $this->addFlash(
                'won',
                $session->get("flash")
            );
            $session->set("player_won", $playerWon +1);
            $session->set("bank_currency", $game->getBank()->removeCurrency($bet));
            $session->set("player_currency", $game->getPlayer()->addCurrency($bet));
        }

        $game->closeGame($session->get("player_currency"), $session->get("bank_currency"));

        $data = [
            "card" => $game->getDrawnCard(),
            "hand" => $game->getHand()->getHandString(),
            "bankHand" => $game->getBankHand()->getHandString(),
            "player" => $session->get("player_score"),
            "bank" => $session->get("bank_score"),
            "flash" => $session->get("flash"),
            "playerWon" => $session->get("player_won"),
            "bankWon" => $session->get("bank_won"),
            "playerCurrency" => $session->get("player_currency"),
            "bankCurrency" => $session->get("bank_currency"),
            "statistics" => $game->getStatistics($game->getPlayer()->getScore()),
            "closeGame" => $session->get("closeGame")
        ];

        return $this->render('game/play.html.twig', $data);
    }

    #[Route("/game/draw", name: "game_draw", methods: ['POST'])]
    public function draw(
        SessionInterface $session
    ): Response {
        /**
         * @var GameBoard $game Current game of 21
         */
        $game = $session->get("game");

        if ($game->checkEmptyDeck() !== true) {
            $game->playerDraws();
            $session->set("game", $game);
        }

        $session->set("flash", null);

        return $this->redirectToRoute('game_play');
    }

    #[Route("/game/save", name: "game_save", methods: ['POST'])]
    public function save(
        SessionInterface $session
    ): Response {
        /**
         * @var GameBoard $game Current game of 21
         */
        $game = $session->get("game");

        if ($session->get("which_bank") == "smart") {
            $bankScore = $game->bankDrawsSmarter();
            $session->set("bank_score", $bankScore);
        } elseif ($session->get("which_bank") == "dumb") {
            $bankScore = $game->bankDraws();
            $session->set("bank_score", $bankScore);
        }

        $session->set("flash", $game->endGame());

        return $this->redirectToRoute('game_play');
    }

    #[Route("/game/rematch", name: "game_rematch", methods: ['POST'])]
    public function rematch(
        SessionInterface $session
    ): Response {
        /**
         * @var GameBoard $game Current game of 21
         */
        $game = $session->get("game");

        if ($game->getHand() != null) {
            $game->getHand()->clearHand();
            $game->getBankHand()->clearHand();
        }

        $session->set("player_score", $game->getPlayer()->resetScore());
        $session->set("bank_score", $game->getBank()->resetScore());
        $session->set("hand", $game->getHand()->clearHand());
        $session->set("flash", null);

        return $this->redirectToRoute('game_play');
    }
}

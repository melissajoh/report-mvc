<?php

namespace App\Controller;

use App\Card\GameBoard;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Test cases for controller CardGameController
 */
class GameControllerTest extends WebTestCase
{
    public function testHomeRoute(): void
    {
        $client = static::createClient();

        //$crawler = $client->request('GET', '/game');
        $client->request('GET', '/game');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', "♥ ♣ Kortspelet 21 ♠ ♦");
        $this->assertSelectorExists('form');
        $this->assertFormValue('form', 'bet', '10');
        $this->assertFormValue('form', 'bank', 'dumb');
    }

    public function testDocRoute(): void
    {
        $client = static::createClient();

        $client->request('GET', '/game/doc');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', "Dokumentation kortspel");
    }

    public function testInitRoute(): void
    {
        $client = static::createClient();

        $client->request('GET', '/game/init');

        $this->assertResponseRedirects('/game/play');
    }

    public function testPlayRoute(): void
    {
        $client = static::createClient();

        $client->request('GET', '/game/play');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', "♥ ♣ Kortspel: 21 ♠ ♦");
    }
}

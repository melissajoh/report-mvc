<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/library' => [[['_route' => 'library', '_controller' => 'App\\Controller\\BookController::index'], null, null, null, false, false, null]],
        '/library/show' => [[['_route' => 'all_books', '_controller' => 'App\\Controller\\BookController::showAllBook'], null, null, null, false, false, null]],
        '/library/create' => [[['_route' => 'book_create', '_controller' => 'App\\Controller\\BookController::createBook'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/api/library/books' => [[['_route' => 'all_books_json', '_controller' => 'App\\Controller\\BookController::showAllBooksJson'], null, null, null, false, false, null]],
        '/card' => [[['_route' => 'card_home', '_controller' => 'App\\Controller\\CardController::home'], null, null, null, false, false, null]],
        '/card/deck' => [[['_route' => 'card_deck', '_controller' => 'App\\Controller\\CardController::deck'], null, null, null, false, false, null]],
        '/card/deck/shuffle' => [[['_route' => 'card_shuffle', '_controller' => 'App\\Controller\\CardController::shuffle'], null, null, null, false, false, null]],
        '/card/deck/draw' => [[['_route' => 'card_draw', '_controller' => 'App\\Controller\\CardController::draw'], null, null, null, false, false, null]],
        '/game' => [[['_route' => 'game_home', '_controller' => 'App\\Controller\\GameController::gameHome'], null, null, null, false, false, null]],
        '/game/doc' => [[['_route' => 'game_doc', '_controller' => 'App\\Controller\\GameController::doc'], null, null, null, false, false, null]],
        '/game/init' => [[['_route' => 'game_init', '_controller' => 'App\\Controller\\GameController::init'], null, ['POST' => 0, 'GET' => 1], null, false, false, null]],
        '/game/play' => [[['_route' => 'game_play', '_controller' => 'App\\Controller\\GameController::play'], null, null, null, false, false, null]],
        '/game/draw' => [[['_route' => 'game_draw', '_controller' => 'App\\Controller\\GameController::draw'], null, ['POST' => 0], null, false, false, null]],
        '/game/save' => [[['_route' => 'game_save', '_controller' => 'App\\Controller\\GameController::save'], null, ['POST' => 0], null, false, false, null]],
        '/game/rematch' => [[['_route' => 'game_rematch', '_controller' => 'App\\Controller\\GameController::rematch'], null, ['POST' => 0], null, false, false, null]],
        '/api/deck' => [[['_route' => 'deck', '_controller' => 'App\\Controller\\JsonCardController::jsonDeck'], null, ['GET' => 0], null, false, false, null]],
        '/api/deck/shuffle' => [[['_route' => 'shuffle', '_controller' => 'App\\Controller\\JsonCardController::jsonShuffle'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/api/deck/draw' => [[['_route' => 'draw', '_controller' => 'App\\Controller\\JsonCardController::jsonDraw'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/api/game' => [[['_route' => 'game', '_controller' => 'App\\Controller\\JsonCardController::jsonGame'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/api/quote' => [[['_route' => 'quote', '_controller' => 'App\\Controller\\JsonController::jsonNumber'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/report' => [[['_route' => 'report', '_controller' => 'App\\Controller\\MainController::report'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'about', '_controller' => 'App\\Controller\\MainController::about'], null, null, null, false, false, null]],
        '/lucky' => [[['_route' => 'lucky', '_controller' => 'App\\Controller\\MainController::number'], null, null, null, false, false, null]],
        '/api' => [[['_route' => 'api', '_controller' => 'App\\Controller\\MainController::api'], null, null, null, false, false, null]],
        '/metrics' => [[['_route' => 'metrics', '_controller' => 'App\\Controller\\MainController::metrics'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/library/(?'
                    .'|show/([^/]++)(*:32)'
                    .'|update/([^/]++)(*:54)'
                .')'
                .'|/book/delete(?'
                    .'|view/([^/]++)(*:90)'
                    .'|/([^/]++)(*:106)'
                .')'
                .'|/api/(?'
                    .'|library/book/([^/]++)(*:144)'
                    .'|deck/draw/(\\d+)(*:167)'
                .')'
                .'|/card/deck/draw/(\\d+)(*:197)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        32 => [[['_route' => 'book_by_id', '_controller' => 'App\\Controller\\BookController::showBookById'], ['id'], null, null, false, true, null]],
        54 => [[['_route' => 'book_update', '_controller' => 'App\\Controller\\BookController::updateBook'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        90 => [[['_route' => 'book_delete_view', '_controller' => 'App\\Controller\\BookController::deleteBookView'], ['id'], null, null, false, true, null]],
        106 => [[['_route' => 'book_delete_by_id', '_controller' => 'App\\Controller\\BookController::deleteBookById'], ['id'], ['POST' => 0], null, false, true, null]],
        144 => [[['_route' => 'book_by_isbn', '_controller' => 'App\\Controller\\BookController::showBookByIsbn'], ['isbn'], null, null, false, true, null]],
        167 => [[['_route' => 'draw_many', '_controller' => 'App\\Controller\\JsonCardController::jsonDrawMany'], ['num'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        197 => [
            [['_route' => 'draw_num_cards', '_controller' => 'App\\Controller\\CardController::drawCards'], ['num'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

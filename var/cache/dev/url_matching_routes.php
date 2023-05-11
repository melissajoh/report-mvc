<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
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
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/library/(?'
                    .'|show/([^/]++)(*:194)'
                    .'|update/([^/]++)(*:217)'
                .')'
                .'|/book/delete(?'
                    .'|view/([^/]++)(*:254)'
                    .'|/([^/]++)(*:271)'
                .')'
                .'|/api/(?'
                    .'|library/book/([^/]++)(*:309)'
                    .'|deck/draw/(\\d+)(*:332)'
                .')'
                .'|/card/deck/draw/(\\d+)(*:362)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        194 => [[['_route' => 'book_by_id', '_controller' => 'App\\Controller\\BookController::showBookById'], ['id'], null, null, false, true, null]],
        217 => [[['_route' => 'book_update', '_controller' => 'App\\Controller\\BookController::updateBook'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        254 => [[['_route' => 'book_delete_view', '_controller' => 'App\\Controller\\BookController::deleteBookView'], ['id'], null, null, false, true, null]],
        271 => [[['_route' => 'book_delete_by_id', '_controller' => 'App\\Controller\\BookController::deleteBookById'], ['id'], ['POST' => 0], null, false, true, null]],
        309 => [[['_route' => 'book_by_isbn', '_controller' => 'App\\Controller\\BookController::showBookByIsbn'], ['isbn'], null, null, false, true, null]],
        332 => [[['_route' => 'draw_many', '_controller' => 'App\\Controller\\JsonCardController::jsonDrawMany'], ['num'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        362 => [
            [['_route' => 'draw_num_cards', '_controller' => 'App\\Controller\\CardController::drawCards'], ['num'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

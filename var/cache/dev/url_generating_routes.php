<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'library' => [[], ['_controller' => 'App\\Controller\\BookController::index'], [], [['text', '/library']], [], [], []],
    'all_books' => [[], ['_controller' => 'App\\Controller\\BookController::showAllBook'], [], [['text', '/library/show']], [], [], []],
    'book_by_id' => [['id'], ['_controller' => 'App\\Controller\\BookController::showBookById'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/library/show']], [], [], []],
    'book_create' => [[], ['_controller' => 'App\\Controller\\BookController::createBook'], [], [['text', '/library/create']], [], [], []],
    'book_update' => [['id'], ['_controller' => 'App\\Controller\\BookController::updateBook'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/library/update']], [], [], []],
    'book_delete_view' => [['id'], ['_controller' => 'App\\Controller\\BookController::deleteBookView'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/book/deleteview']], [], [], []],
    'book_delete_by_id' => [['id'], ['_controller' => 'App\\Controller\\BookController::deleteBookById'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/book/delete']], [], [], []],
    'all_books_json' => [[], ['_controller' => 'App\\Controller\\BookController::showAllBooksJson'], [], [['text', '/api/library/books']], [], [], []],
    'book_by_isbn' => [['isbn'], ['_controller' => 'App\\Controller\\BookController::showBookByIsbn'], [], [['variable', '/', '[^/]++', 'isbn', true], ['text', '/api/library/book']], [], [], []],
    'card_home' => [[], ['_controller' => 'App\\Controller\\CardController::home'], [], [['text', '/card']], [], [], []],
    'card_deck' => [[], ['_controller' => 'App\\Controller\\CardController::deck'], [], [['text', '/card/deck']], [], [], []],
    'card_shuffle' => [[], ['_controller' => 'App\\Controller\\CardController::shuffle'], [], [['text', '/card/deck/shuffle']], [], [], []],
    'card_draw' => [[], ['_controller' => 'App\\Controller\\CardController::draw'], [], [['text', '/card/deck/draw']], [], [], []],
    'draw_num_cards' => [['num'], ['_controller' => 'App\\Controller\\CardController::drawCards'], ['num' => '\\d+'], [['variable', '/', '\\d+', 'num', true], ['text', '/card/deck/draw']], [], [], []],
    'game_home' => [[], ['_controller' => 'App\\Controller\\GameController::gameHome'], [], [['text', '/game']], [], [], []],
    'game_doc' => [[], ['_controller' => 'App\\Controller\\GameController::doc'], [], [['text', '/game/doc']], [], [], []],
    'game_init' => [[], ['_controller' => 'App\\Controller\\GameController::init'], [], [['text', '/game/init']], [], [], []],
    'game_play' => [[], ['_controller' => 'App\\Controller\\GameController::play'], [], [['text', '/game/play']], [], [], []],
    'game_draw' => [[], ['_controller' => 'App\\Controller\\GameController::draw'], [], [['text', '/game/draw']], [], [], []],
    'game_save' => [[], ['_controller' => 'App\\Controller\\GameController::save'], [], [['text', '/game/save']], [], [], []],
    'game_rematch' => [[], ['_controller' => 'App\\Controller\\GameController::rematch'], [], [['text', '/game/rematch']], [], [], []],
    'deck' => [[], ['_controller' => 'App\\Controller\\JsonCardController::jsonDeck'], [], [['text', '/api/deck']], [], [], []],
    'shuffle' => [[], ['_controller' => 'App\\Controller\\JsonCardController::jsonShuffle'], [], [['text', '/api/deck/shuffle']], [], [], []],
    'draw' => [[], ['_controller' => 'App\\Controller\\JsonCardController::jsonDraw'], [], [['text', '/api/deck/draw']], [], [], []],
    'draw_many' => [['num'], ['_controller' => 'App\\Controller\\JsonCardController::jsonDrawMany'], ['num' => '\\d+'], [['variable', '/', '\\d+', 'num', true], ['text', '/api/deck/draw']], [], [], []],
    'game' => [[], ['_controller' => 'App\\Controller\\JsonCardController::jsonGame'], [], [['text', '/api/game']], [], [], []],
    'quote' => [[], ['_controller' => 'App\\Controller\\JsonController::jsonNumber'], [], [['text', '/api/quote']], [], [], []],
    'index' => [[], ['_controller' => 'App\\Controller\\MainController::index'], [], [['text', '/']], [], [], []],
    'report' => [[], ['_controller' => 'App\\Controller\\MainController::report'], [], [['text', '/report']], [], [], []],
    'about' => [[], ['_controller' => 'App\\Controller\\MainController::about'], [], [['text', '/about']], [], [], []],
    'lucky' => [[], ['_controller' => 'App\\Controller\\MainController::number'], [], [['text', '/lucky']], [], [], []],
    'api' => [[], ['_controller' => 'App\\Controller\\MainController::api'], [], [['text', '/api']], [], [], []],
    'metrics' => [[], ['_controller' => 'App\\Controller\\MainController::metrics'], [], [['text', '/metrics']], [], [], []],
];

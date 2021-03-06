<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'effet' => [[], ['_controller' => 'App\\Controller\\EffetController::index'], [], [['text', '/effet']], [], []],
    'effetbuild' => [[], ['_controller' => 'App\\Controller\\EffetController::create'], [], [['text', '/effet/build']], [], []],
    'effetviewall' => [[], ['_controller' => 'App\\Controller\\EffetController::viewAll'], [], [['text', '/effet/viewAll']], [], []],
    'effetview' => [['id'], ['_controller' => 'App\\Controller\\EffetController::view'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/effet/view']], [], []],
    'effetremove' => [['id'], ['_controller' => 'App\\Controller\\EffetController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/effet/remove']], [], []],
    'effetedit' => [['id'], ['_controller' => 'App\\Controller\\EffetController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/effet/edit']], [], []],
    'ethnie' => [[], ['_controller' => 'App\\Controller\\EthnieController::index'], [], [['text', '/ethnie']], [], []],
    'ethniebuild' => [[], ['_controller' => 'App\\Controller\\EthnieController::form'], [], [['text', '/ethnie/build']], [], []],
    'ethnieremove' => [['id'], ['_controller' => 'App\\Controller\\EthnieController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/ethnie/remove']], [], []],
    'ethnieview' => [['id'], ['_controller' => 'App\\Controller\\EthnieController::view'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/ethnie/view']], [], []],
    'leader' => [[], ['_controller' => 'App\\Controller\\LeaderController::index'], [], [['text', '/leader']], [], []],
    'leaderbuild' => [[], ['_controller' => 'App\\Controller\\LeaderController::form'], [], [['text', '/leader/build']], [], []],
    'leaderedit' => [['id'], ['_controller' => 'App\\Controller\\LeaderController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/leader/edit']], [], []],
    'leaderremove' => [['id'], ['_controller' => 'App\\Controller\\LeaderController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/leader/remove']], [], []],
    'leaderview' => [['id'], ['_controller' => 'App\\Controller\\LeaderController::view'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/leader/view']], [], []],
    'leaderviewall' => [[], ['_controller' => 'App\\Controller\\LeaderController::viewAll'], [], [['text', '/leader/viewall']], [], []],
    'nation' => [[], ['_controller' => 'App\\Controller\\NationController::index'], [], [['text', '/nation']], [], []],
    'nationBuild' => [[], ['_controller' => 'App\\Controller\\NationController::create'], [], [['text', '/nation/build']], [], []],
    'nationedit' => [['id'], ['_controller' => 'App\\Controller\\NationController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/nation/edit']], [], []],
    'nationview' => [['id'], ['_controller' => 'App\\Controller\\NationController::view'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/nation/view']], [], []],
    'nationremove' => [['id'], ['_controller' => 'App\\Controller\\NationController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/nation/remove']], [], []],
    'nationviewall' => [[], ['_controller' => 'App\\Controller\\NationController::viewAll'], [], [['text', '/nation/viewall']], [], []],
    'news' => [[], ['_controller' => 'App\\Controller\\NewsController::index'], [], [['text', '/news']], [], []],
    'newsbuild' => [[], ['_controller' => 'App\\Controller\\NewsController::form'], [], [['text', '/news/build']], [], []],
    'newsedit' => [['id'], ['_controller' => 'App\\Controller\\NewsController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/news/edit']], [], []],
    'newsremove' => [['id'], ['_controller' => 'App\\Controller\\NewsController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/news/remove']], [], []],
    'newsview' => [['id'], ['_controller' => 'App\\Controller\\NewsController::view'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/news/view']], [], []],
    'newsviewall' => [[], ['_controller' => 'App\\Controller\\NewsController::viewAll'], [], [['text', '/news/viewall']], [], []],
    'parti' => [[], ['_controller' => 'App\\Controller\\PartiController::index'], [], [['text', '/parti']], [], []],
    'partibuild' => [[], ['_controller' => 'App\\Controller\\PartiController::form'], [], [['text', '/parti/build']], [], []],
    'partiview' => [['id'], ['_controller' => 'App\\Controller\\PartiController::view'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/parti/view']], [], []],
    'partiremove' => [['id'], ['_controller' => 'App\\Controller\\PartiController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/parti/remove']], [], []],
    'partiviewall' => [[], ['_controller' => 'App\\Controller\\PartiController::viewAll'], [], [['text', '/parti/viewall']], [], []],
    'partiedit' => [['id'], ['_controller' => 'App\\Controller\\PartiController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/parti/edit']], [], []],
    'politique' => [[], ['_controller' => 'App\\Controller\\PolitiqueController::index'], [], [['text', '/politique']], [], []],
    'politiquebuild' => [[], ['_controller' => 'App\\Controller\\PolitiqueController::create'], [], [['text', '/politique/build']], [], []],
    'politiqueremove' => [['id'], ['_controller' => 'App\\Controller\\PolitiqueController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/politique/remove']], [], []],
    'politiqueedit' => [['id'], ['_controller' => 'App\\Controller\\PolitiqueController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/politique/edit']], [], []],
    'politiqueview' => [['id'], ['_controller' => 'App\\Controller\\PolitiqueController::view'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/politique/view']], [], []],
    'politiqueviewAll' => [[], ['_controller' => 'App\\Controller\\PolitiqueController::viewAll'], [], [['text', '/politique/viewAll']], [], []],
    'index' => [[], ['_controller' => 'App\\Controller\\PolitiqueController::viewAll'], [], [['text', '/']], [], []],
    'trait_element' => [[], ['_controller' => 'App\\Controller\\TraitElementController::index'], [], [['text', '/trait/element']], [], []],
    'traitbuild' => [[], ['_controller' => 'App\\Controller\\TraitElementController::create'], [], [['text', '/trait/build']], [], []],
    'traitview' => [['id'], ['_controller' => 'App\\Controller\\TraitElementController::view'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/trait/view']], [], []],
    'traitviewall' => [[], ['_controller' => 'App\\Controller\\TraitElementController::viewAll'], [], [['text', '/trait/viewAll']], [], []],
    'traitremove' => [['id'], ['_controller' => 'App\\Controller\\TraitElementController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/trait/remove']], [], []],
    'traitedit' => [['id'], ['_controller' => 'App\\Controller\\TraitElementController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/trait/edit']], [], []],
    'easyadmin' => [[], ['_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\EasyAdminController::indexAction'], [], [['text', '/admin/']], [], []],
];

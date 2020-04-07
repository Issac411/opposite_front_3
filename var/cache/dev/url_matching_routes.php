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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/ethnie' => [[['_route' => 'ethnie', '_controller' => 'App\\Controller\\EthnieController::index'], null, null, null, false, false, null]],
        '/ethnie/build' => [[['_route' => 'ethniebuild', '_controller' => 'App\\Controller\\EthnieController::form'], null, null, null, false, false, null]],
        '/leader' => [[['_route' => 'leader', '_controller' => 'App\\Controller\\LeaderController::index'], null, null, null, false, false, null]],
        '/leader/build' => [[['_route' => 'leaderbuild', '_controller' => 'App\\Controller\\LeaderController::form'], null, null, null, false, false, null]],
        '/leader/viewall' => [[['_route' => 'leaderviewall', '_controller' => 'App\\Controller\\LeaderController::viewAll'], null, null, null, false, false, null]],
        '/nation' => [[['_route' => 'nation', '_controller' => 'App\\Controller\\NationController::index'], null, null, null, false, false, null]],
        '/nation/build' => [[['_route' => 'nationBuild', '_controller' => 'App\\Controller\\NationController::create'], null, null, null, false, false, null]],
        '/nation/viewall' => [[['_route' => 'nationviewall', '_controller' => 'App\\Controller\\NationController::viewAll'], null, null, null, false, false, null]],
        '/parti' => [[['_route' => 'parti', '_controller' => 'App\\Controller\\PartiController::index'], null, null, null, false, false, null]],
        '/parti/build' => [[['_route' => 'partibuild', '_controller' => 'App\\Controller\\PartiController::form'], null, null, null, false, false, null]],
        '/parti/viewall' => [[['_route' => 'partiviewall', '_controller' => 'App\\Controller\\PartiController::viewAll'], null, null, null, false, false, null]],
        '/politique' => [[['_route' => 'politique', '_controller' => 'App\\Controller\\PolitiqueController::index'], null, null, null, false, false, null]],
        '/politique/build' => [[['_route' => 'politiquebuild', '_controller' => 'App\\Controller\\PolitiqueController::create'], null, null, null, false, false, null]],
        '/politique/viewAll' => [[['_route' => 'politiqueviewAll', '_controller' => 'App\\Controller\\PolitiqueController::viewAll'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\PolitiqueController::viewAll'], null, null, null, false, false, null]],
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
                .'|/ethnie/view/([^/]++)(*:190)'
                .'|/leader/(?'
                    .'|edit/([^/]++)(*:222)'
                    .'|view/([^/]++)(*:243)'
                .')'
                .'|/nation/(?'
                    .'|edit/([^/]++)(*:276)'
                    .'|view/([^/]++)(*:297)'
                .')'
                .'|/p(?'
                    .'|arti/(?'
                        .'|view/([^/]++)(*:332)'
                        .'|edit/([^/]++)(*:353)'
                    .')'
                    .'|olitique/(?'
                        .'|edit/([^/]++)(*:387)'
                        .'|view/([^/]++)(*:408)'
                    .')'
                .')'
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
        190 => [[['_route' => 'ethnieview', '_controller' => 'App\\Controller\\EthnieController::view'], ['id'], null, null, false, true, null]],
        222 => [[['_route' => 'leaderedit', '_controller' => 'App\\Controller\\LeaderController::edit'], ['id'], null, null, false, true, null]],
        243 => [[['_route' => 'leaderview', '_controller' => 'App\\Controller\\LeaderController::view'], ['id'], null, null, false, true, null]],
        276 => [[['_route' => 'nationedit', '_controller' => 'App\\Controller\\NationController::edit'], ['id'], null, null, false, true, null]],
        297 => [[['_route' => 'nationview', '_controller' => 'App\\Controller\\NationController::view'], ['id'], null, null, false, true, null]],
        332 => [[['_route' => 'partiview', '_controller' => 'App\\Controller\\PartiController::view'], ['id'], null, null, false, true, null]],
        353 => [[['_route' => 'partiedit', '_controller' => 'App\\Controller\\PartiController::edit'], ['id'], null, null, false, true, null]],
        387 => [[['_route' => 'politiqueedit', '_controller' => 'App\\Controller\\PolitiqueController::edit'], ['id'], null, null, false, true, null]],
        408 => [
            [['_route' => 'politiqueview', '_controller' => 'App\\Controller\\PolitiqueController::view'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
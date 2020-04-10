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
        '/effet' => [[['_route' => 'effet', '_controller' => 'App\\Controller\\EffetController::index'], null, null, null, false, false, null]],
        '/effet/build' => [[['_route' => 'effetbuild', '_controller' => 'App\\Controller\\EffetController::create'], null, null, null, false, false, null]],
        '/effet/viewAll' => [[['_route' => 'effetviewall', '_controller' => 'App\\Controller\\EffetController::viewAll'], null, null, null, false, false, null]],
        '/ethnie' => [[['_route' => 'ethnie', '_controller' => 'App\\Controller\\EthnieController::index'], null, null, null, false, false, null]],
        '/ethnie/build' => [[['_route' => 'ethniebuild', '_controller' => 'App\\Controller\\EthnieController::form'], null, null, null, false, false, null]],
        '/leader' => [[['_route' => 'leader', '_controller' => 'App\\Controller\\LeaderController::index'], null, null, null, false, false, null]],
        '/leader/build' => [[['_route' => 'leaderbuild', '_controller' => 'App\\Controller\\LeaderController::form'], null, null, null, false, false, null]],
        '/leader/viewall' => [[['_route' => 'leaderviewall', '_controller' => 'App\\Controller\\LeaderController::viewAll'], null, null, null, false, false, null]],
        '/nation' => [[['_route' => 'nation', '_controller' => 'App\\Controller\\NationController::index'], null, null, null, false, false, null]],
        '/nation/build' => [[['_route' => 'nationBuild', '_controller' => 'App\\Controller\\NationController::create'], null, null, null, false, false, null]],
        '/nation/viewall' => [[['_route' => 'nationviewall', '_controller' => 'App\\Controller\\NationController::viewAll'], null, null, null, false, false, null]],
        '/news' => [[['_route' => 'news', '_controller' => 'App\\Controller\\NewsController::index'], null, null, null, false, false, null]],
        '/news/build' => [[['_route' => 'newsbuild', '_controller' => 'App\\Controller\\NewsController::form'], null, null, null, false, false, null]],
        '/news/viewall' => [[['_route' => 'newsviewall', '_controller' => 'App\\Controller\\NewsController::viewAll'], null, null, null, false, false, null]],
        '/parti' => [[['_route' => 'parti', '_controller' => 'App\\Controller\\PartiController::index'], null, null, null, false, false, null]],
        '/parti/build' => [[['_route' => 'partibuild', '_controller' => 'App\\Controller\\PartiController::form'], null, null, null, false, false, null]],
        '/parti/viewall' => [[['_route' => 'partiviewall', '_controller' => 'App\\Controller\\PartiController::viewAll'], null, null, null, false, false, null]],
        '/politique' => [[['_route' => 'politique', '_controller' => 'App\\Controller\\PolitiqueController::index'], null, null, null, false, false, null]],
        '/politique/build' => [[['_route' => 'politiquebuild', '_controller' => 'App\\Controller\\PolitiqueController::create'], null, null, null, false, false, null]],
        '/politique/viewAll' => [[['_route' => 'politiqueviewAll', '_controller' => 'App\\Controller\\PolitiqueController::viewAll'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\PolitiqueController::viewAll'], null, null, null, false, false, null]],
        '/trait/element' => [[['_route' => 'trait_element', '_controller' => 'App\\Controller\\TraitElementController::index'], null, null, null, false, false, null]],
        '/trait/build' => [[['_route' => 'traitbuild', '_controller' => 'App\\Controller\\TraitElementController::create'], null, null, null, false, false, null]],
        '/trait/viewAll' => [[['_route' => 'traitviewall', '_controller' => 'App\\Controller\\TraitElementController::viewAll'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'easyadmin', '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\EasyAdminController::indexAction'], null, null, null, true, false, null]],
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
                .'|/e(?'
                    .'|ffet/(?'
                        .'|view/([^/]++)(*:195)'
                        .'|remove/([^/]++)(*:218)'
                        .'|edit/([^/]++)(*:239)'
                    .')'
                    .'|thnie/(?'
                        .'|remove/([^/]++)(*:272)'
                        .'|view/([^/]++)(*:293)'
                    .')'
                .')'
                .'|/leader/(?'
                    .'|edit/([^/]++)(*:327)'
                    .'|remove/([^/]++)(*:350)'
                    .'|view/([^/]++)(*:371)'
                .')'
                .'|/n(?'
                    .'|ation/(?'
                        .'|edit/([^/]++)(*:407)'
                        .'|view/([^/]++)(*:428)'
                        .'|remove/([^/]++)(*:451)'
                    .')'
                    .'|ews/(?'
                        .'|edit/([^/]++)(*:480)'
                        .'|remove/([^/]++)(*:503)'
                        .'|view/([^/]++)(*:524)'
                    .')'
                .')'
                .'|/p(?'
                    .'|arti/(?'
                        .'|view/([^/]++)(*:560)'
                        .'|remove/([^/]++)(*:583)'
                        .'|edit/([^/]++)(*:604)'
                    .')'
                    .'|olitique/(?'
                        .'|remove/([^/]++)(*:640)'
                        .'|edit/([^/]++)(*:661)'
                        .'|view/([^/]++)(*:682)'
                    .')'
                .')'
                .'|/trait/(?'
                    .'|view/([^/]++)(*:715)'
                    .'|remove/([^/]++)(*:738)'
                    .'|edit/([^/]++)(*:759)'
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
        195 => [[['_route' => 'effetview', '_controller' => 'App\\Controller\\EffetController::view'], ['id'], null, null, false, true, null]],
        218 => [[['_route' => 'effetremove', '_controller' => 'App\\Controller\\EffetController::delete'], ['id'], null, null, false, true, null]],
        239 => [[['_route' => 'effetedit', '_controller' => 'App\\Controller\\EffetController::edit'], ['id'], null, null, false, true, null]],
        272 => [[['_route' => 'ethnieremove', '_controller' => 'App\\Controller\\EthnieController::delete'], ['id'], null, null, false, true, null]],
        293 => [[['_route' => 'ethnieview', '_controller' => 'App\\Controller\\EthnieController::view'], ['id'], null, null, false, true, null]],
        327 => [[['_route' => 'leaderedit', '_controller' => 'App\\Controller\\LeaderController::edit'], ['id'], null, null, false, true, null]],
        350 => [[['_route' => 'leaderremove', '_controller' => 'App\\Controller\\LeaderController::delete'], ['id'], null, null, false, true, null]],
        371 => [[['_route' => 'leaderview', '_controller' => 'App\\Controller\\LeaderController::view'], ['id'], null, null, false, true, null]],
        407 => [[['_route' => 'nationedit', '_controller' => 'App\\Controller\\NationController::edit'], ['id'], null, null, false, true, null]],
        428 => [[['_route' => 'nationview', '_controller' => 'App\\Controller\\NationController::view'], ['id'], null, null, false, true, null]],
        451 => [[['_route' => 'nationremove', '_controller' => 'App\\Controller\\NationController::delete'], ['id'], null, null, false, true, null]],
        480 => [[['_route' => 'newsedit', '_controller' => 'App\\Controller\\NewsController::edit'], ['id'], null, null, false, true, null]],
        503 => [[['_route' => 'newsremove', '_controller' => 'App\\Controller\\NewsController::delete'], ['id'], null, null, false, true, null]],
        524 => [[['_route' => 'newsview', '_controller' => 'App\\Controller\\NewsController::view'], ['id'], null, null, false, true, null]],
        560 => [[['_route' => 'partiview', '_controller' => 'App\\Controller\\PartiController::view'], ['id'], null, null, false, true, null]],
        583 => [[['_route' => 'partiremove', '_controller' => 'App\\Controller\\PartiController::delete'], ['id'], null, null, false, true, null]],
        604 => [[['_route' => 'partiedit', '_controller' => 'App\\Controller\\PartiController::edit'], ['id'], null, null, false, true, null]],
        640 => [[['_route' => 'politiqueremove', '_controller' => 'App\\Controller\\PolitiqueController::delete'], ['id'], null, null, false, true, null]],
        661 => [[['_route' => 'politiqueedit', '_controller' => 'App\\Controller\\PolitiqueController::edit'], ['id'], null, null, false, true, null]],
        682 => [[['_route' => 'politiqueview', '_controller' => 'App\\Controller\\PolitiqueController::view'], ['id'], null, null, false, true, null]],
        715 => [[['_route' => 'traitview', '_controller' => 'App\\Controller\\TraitElementController::view'], ['id'], null, null, false, true, null]],
        738 => [[['_route' => 'traitremove', '_controller' => 'App\\Controller\\TraitElementController::delete'], ['id'], null, null, false, true, null]],
        759 => [
            [['_route' => 'traitedit', '_controller' => 'App\\Controller\\TraitElementController::edit'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

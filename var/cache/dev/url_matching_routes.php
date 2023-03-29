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
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/catgeorie' => [[['_route' => 'categorie', '_controller' => 'App\\Controller\\CategorieController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/prestataire' => [[['_route' => 'app_prestataire', '_controller' => 'App\\Controller\\PrestataireController::index'], null, null, null, false, false, null]],
        '/addpromotion' => [[['_route' => 'add_promotion', '_controller' => 'App\\Controller\\PromotionController::index'], null, null, null, false, false, null]],
        '/promotion' => [[['_route' => 'promotion', '_controller' => 'App\\Controller\\PromotionController::getAllPromotions'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/addstage' => [[['_route' => 'add_stage', '_controller' => 'App\\Controller\\StageController::index'], null, null, null, false, false, null]],
        '/stages' => [[['_route' => 'stages', '_controller' => 'App\\Controller\\StageController::getAllStages'], null, null, null, false, false, null]],
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
                .'|/categorie/([^/]++)(*:188)'
                .'|/s(?'
                    .'|earch/([^/]++)/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:251)'
                    .'|tage/([^/]++)(*:272)'
                .')'
                .'|/pr(?'
                    .'|estataire/([^/]++)(*:305)'
                    .'|omotion/([^/]++)(*:329)'
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
        188 => [[['_route' => 'afficher_categorie', '_controller' => 'App\\Controller\\CategorieController::show'], ['id'], null, null, false, true, null]],
        251 => [[['_route' => 'app_search_result', '_controller' => 'App\\Controller\\HomeController::search_result'], ['nom', 'categorie', 'code_postal', 'localite', 'commune'], null, null, false, true, null]],
        272 => [[['_route' => 'afficher_stage', '_controller' => 'App\\Controller\\StageController::showById'], ['id'], null, null, false, true, null]],
        305 => [[['_route' => 'afficher_prestataire', '_controller' => 'App\\Controller\\PrestataireController::afficher'], ['id'], null, null, false, true, null]],
        329 => [
            [['_route' => 'afficher_promotion', '_controller' => 'App\\Controller\\PromotionController::afficher'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

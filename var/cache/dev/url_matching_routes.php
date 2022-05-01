<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin.product.index', '_controller' => 'App\\Controller\\AdminProductController::index'], null, null, null, false, false, null]],
        '/api/product' => [[['_route' => 'admin.product.new', '_controller' => 'App\\Controller\\AdminProductController::new'], null, null, null, false, false, null]],
        '/api/cart' => [[['_route' => 'product.index', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/api/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/api/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/api/logout' => [[['_route' => 'app_logout'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|dmin/([^/]++)(?'
                        .'|(*:28)'
                    .')'
                    .'|pi/cart/(?'
                        .'|add/([^/]++)(*:59)'
                        .'|([^/]++)(*:74)'
                    .')'
                .')'
                .'|/biens/([a-z0-9\\-]*)\\-([^/]++)(*:113)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:152)'
                    .'|wdt/([^/]++)(*:172)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:218)'
                            .'|router(*:232)'
                            .'|exception(?'
                                .'|(*:252)'
                                .'|\\.css(*:265)'
                            .')'
                        .')'
                        .'|(*:275)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        28 => [
            [['_route' => 'admin.product.edit', '_controller' => 'App\\Controller\\AdminProductController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'admin.product.delete', '_controller' => 'App\\Controller\\AdminProductController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        59 => [[['_route' => 'cart.add', '_controller' => 'App\\Controller\\CartController::add'], ['id'], null, null, false, true, null]],
        74 => [[['_route' => 'cart.delete', '_controller' => 'App\\Controller\\CartController::delete'], ['id'], null, null, false, true, null]],
        113 => [[['_route' => 'product.show', '_controller' => 'App\\Controller\\ProductController::show'], ['slug', 'id'], null, null, false, true, null]],
        152 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        172 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        218 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        232 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        252 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        265 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        275 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

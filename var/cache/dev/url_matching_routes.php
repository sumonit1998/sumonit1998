<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/player' => [[['_route' => 'app_player_index', '_controller' => 'App\\Controller\\PlayerController::index'], null, ['GET' => 0], null, true, false, null]],
        '/player/buy' => [[['_route' => 'app_player_buy', '_controller' => 'App\\Controller\\PlayerController::buyPlayer'], null, ['GET' => 0], null, false, false, null]],
        '/player/sell' => [[['_route' => 'app_player_sell', '_controller' => 'App\\Controller\\PlayerController::sellPlayer'], null, ['GET' => 0], null, false, false, null]],
        '/' => [[['_route' => 'app_team_index', '_controller' => 'App\\Controller\\TeamController::index'], null, ['GET' => 0], null, false, false, null]],
        '/new' => [[['_route' => 'app_team_new', '_controller' => 'App\\Controller\\TeamController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/teamplayer' => [[['_route' => 'app_player_teamplayer', '_controller' => 'App\\Controller\\TeamController::buyPlayer'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

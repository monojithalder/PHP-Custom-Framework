<?php
$routes = [
    '/' => [
        'controller' => 'User',
        'function'     => 'showUser'
    ],
    '/home' => [
        'controller' => 'User',
        'function'     => 'home'
    ],
    '/show' => [
        'controller' => 'TestController',
        'function'     => 'index'
    ],
    '/login' => [
        'controller' => 'AuthController',
        'function'     => 'showLogin'
    ],
    '/dologin' => [
        'controller' => 'AuthController',
        'function'     => 'postLogin'
    ],
];

<?php
use Cake\Routing\Router;

Router::plugin(
    'AdminLTE',
    ['path' => '/admin-l-t-e'],
    function ($routes) {
        $routes->fallbacks('DashedRoute');
    }
);

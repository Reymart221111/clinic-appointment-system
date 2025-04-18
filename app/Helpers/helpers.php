<?php

if (!function_exists('isActive')) {
    function isActive($routes, $activeClass = 'active', $inactiveClass = '')
    {
        // Convert string to array if single route is passed
        $routes = (array)$routes;

        foreach ($routes as $route) {
            if (Route::is($route)) {
                return $activeClass;
            }
        }

        return $inactiveClass;
    }
}

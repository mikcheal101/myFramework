<?php

namespace app\core;

/**
 * Class Router
 * 
 * @author Hirekaan Micheal Hemen <hirekaan.micheal@gmail.com>
 * @package app\core
 */

class Router
{

    protected array $routes = [];

    public function get(string $route, $callback)
    {
        $this->routes['get'][$route] = $callback; 
    }
}

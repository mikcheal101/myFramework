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

    /**
     * Router contructor.
     * 
     * @param app\core\Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function get(string $route, $callback)
    {
        $this->routes['get'][$route] = $callback;
    }

    public function resolve()
    {
        $this->request
    }
}

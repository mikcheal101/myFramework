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
    public Request $request;

    /**
     * Router contructor.
     * 
     * @param app\core\Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function get(string $route, callable $callback)
    {
        $this->routes['get'][$route] = $callback;
    }

    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        
        $callback = $this->routes[$method][$path] ?? false;

        if ($callback === false)
        {
            echo "Not Found!";
            exit;
        }

        echo call_user_func($callback);
    }
}

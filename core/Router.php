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

    public function get(string $route, string | callable $callback)
    {
        $this->routes['get'][$route] = $callback;
    }

    protected function renderView(string $view)
    {
        include_once __DIR__ . "/../bundle/views/". $view . ".php";
    }

    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        
        $callback = $this->routes[$method][$path] ?? false;

        if ($callback === false)
        {
            return "Not Found!";
        }

        if (is_string($callback))
        {
            return $this->renderView($callback);
        }

        return call_user_func($callback);
    }
}

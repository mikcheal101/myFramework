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
        $layoutContent = $this->layoutContent();
        $viewContent = $this->renderOnlyView($view);

        return str_replace("{{ body }}", $viewContent, $layoutContent);
    }

    protected function layoutContent()
    {
        ob_start();
        include_once Application::$ROOT_DIRECTORY  . "/bundle/views/layouts/main.php";
        return ob_get_clean();
    }

    protected function renderOnlyView(string $view)
    {
        ob_start();
        include_once Application::$ROOT_DIRECTORY  . "/bundle/views/". $view .".php";
        return ob_get_clean();
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

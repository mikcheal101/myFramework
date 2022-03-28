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

    public Response $response;
    public Request $request;

    /**
     * Router contructor.
     * 
     * @param app\core\Request $request
     * @param app\core\Response $response
     */
    public function __construct(Request $request, Response $response)
    {
        $this->response = $response;
        $this->request = $request;
    }

    public function get(string $route, string | callable | array $callback): void
    {
        $this->routes['get'][$route] = $callback;
    }

    public function post(string $route, string | callable | array $callback): void
    {
        $this->routes['post'][$route] = $callback;
    }

    public function renderView(string $view, array $parameters = []): string
    {
        $layoutContent = $this->layoutContent();
        $viewContent = $this->renderOnlyView($view, $parameters);

        return str_replace("{{ body }}", $viewContent, $layoutContent);
    }

    protected function renderViewContent(string $viewContent): string
    {
        $layoutContent = $this->layoutContent();
        return str_replace("{{ body }}", $viewContent, $layoutContent);
    }

    protected function layoutContent(): string | false
    {
        ob_start();
        include_once Application::$ROOT_DIRECTORY  . "/views/layouts/main.php";
        return ob_get_clean();
    }

    protected function renderOnlyView(string $view, array $parameters = []): string | false
    {
        foreach($parameters as $key => $value)
        {
            $$key = $value;
        }
        ob_start();
        include_once Application::$ROOT_DIRECTORY  . "/views/". $view .".php";
        return ob_get_clean();
    }

    public function resolve(): string
    {
        $path = $this->request->getPath();
        $method = $this->request->method();
        
        $callback = $this->routes[$method][$path] ?? false;

        
        if ($callback === false)
        {
            $this->response->setStatusCode(404);
            return $this->renderView("responsePages/_404Page");
        }

        if (is_string($callback))
        {
            return $this->renderView($callback);
        }

        if (is_array($callback))
        {
            $callback[0] = new $callback[0]();
        }

        return call_user_func($callback, $this->request);
    }

    
}

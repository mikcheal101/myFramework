<?php

namespace app\core;

/**
 * Class Application
 * 
 * @author Hirekaan Micheal Hemen <hirekaan.micheal@gmail.com>
 * @package app\core
 */
class Application
{
    public static string $ROOT_DIRECTORY;

    public Router $router;
    public Request $request;
    public Response $response;

    public function __construct(string $rootPath)
    {
        self::$ROOT_DIRECTORY = $rootPath;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request);
    }

    public function run()
    {
        echo $this->router->resolve();
    }
}

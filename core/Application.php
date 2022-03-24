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

    public Router $router;

    public function __construct()
    {
        $this->router = new Router();
    }

    public function run()
    {
        $this->router->resolve();
    }
}

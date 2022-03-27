<?php

namespace app\core;

/**
 * class BaseController
 * 
 * @author Hirekaan Micheal Hemen <hirekaan.micheal@gmail.com>
 * @package app\core
 */

class BaseController
{

    /**
     * Render a page
     * 
     * @param string $page
     * @param array $parameters - Parameters to pass to the page
     * 
     * @return string|false  
     */
    protected static function render(string $page, array $parameters = []): string | false
    {
        return Application::$app->router->renderView($page, $parameters);
    }
}

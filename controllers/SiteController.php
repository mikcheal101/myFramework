<?php

namespace app\controllers;

use app\core\Application;

/**
 * class SiteController
 * 
 * @author Hirekaan Micheal Hemen <hirekaan.micheal@gmail.com>
 * @package app\controllers
 */

class SiteController
{
    public static function homePage()
    {
        $params = [
            "title" => "Home page",
        ];
        return Application::$app->router->renderView("home", $params);
    }

    public static function contactPage()
    {
        return Application::$app->router->renderView("contact");
    }

    public static function handleContact()
    {
        return "Handling submitted data";
    }
}

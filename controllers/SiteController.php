<?php

namespace app\controllers;

use app\core\Application;
use app\core\BaseController;

/**
 * class SiteController
 * 
 * @author Hirekaan Micheal Hemen <hirekaan.micheal@gmail.com>
 * @package app\controllers
 */

class SiteController extends BaseController
{
    public static function homePage()
    {
        $params = [
            "title" => "Home page",
        ];
        return self::render("home", $params);
    }

    public static function contactPage()
    {
        return self::render("contact");
    }

    public static function handleContact()
    {
        return "Handling submitted data";
    }
}

<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;

/**
 * class SiteController
 * 
 * @author Hirekaan Micheal Hemen <hirekaan.micheal@gmail.com>
 * @package app\controllers
 */

class SiteController extends Controller
{
    public function homePage()
    {
        $params = [
            "title" => "Home page",
        ];
        return self::render("home", $params);
    }

    public function contactPage()
    {
        return self::render("contact");
    }

    public function handleContact()
    {
        return "Handling submitted data";
    }
}

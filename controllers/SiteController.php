<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;

/**
 * class SiteController
 * 
 * @author Hirekaan Micheal Hemen <hirekaan.micheal@gmail.com>
 * @package app\controllers
 */

class SiteController extends Controller
{
    public function homePage(Request $request)
    {
        $params = [
            "title" => "Home page",
        ];
        return self::render("home", $params);
    }

    public function contactPage(Request $request)
    {
        return self::render("contact");
    }

    public function handleContact(Request $request)
    {
        var_dump($request->getBody());
        return "Handling submitted data";
    }
}

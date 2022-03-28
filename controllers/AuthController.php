<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;

/**
 * class AuthController
 * 
 * @author Hirekaan Micheal Hemen <hirekaan.micheal@gmail.com>
 * @package app\controllers
 */
class AuthController extends Controller
{
    public function login(Request $request)
    {
        return $this->render("login");
    }

    public function register(Request $request)
    {
        return $this->render("register");
    }
}

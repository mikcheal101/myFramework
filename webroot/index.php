<?php

require_once(__DIR__ . "/../vendor/autoload.php");

use app\controllers\AuthController;
use app\controllers\SiteController;
use app\core\Application;

$application = new Application(dirname(__DIR__));

$application->router->get("/", [SiteController::class, "homePage"]);
$application->router->get("/contact", [SiteController::class, "contactPage"]);
$application->router->post("/contact", [SiteController::class, "handleContact"]);

$application->router->get("/login", [AuthController::class, "login"]);
$application->router->get("/register", [AuthController::class, "register"]);

$application->router->post("/login", [AuthController::class, "login"]);
$application->router->post("/register", [AuthController::class, "register"]);

$application->run();

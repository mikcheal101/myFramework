<?php

require_once(__DIR__ . "/../vendor/autoload.php");

use app\controllers\SiteController;
use app\core\Application;

$application = new Application(dirname(__DIR__));

$application->router->get("/", [SiteController::class, "homePage"]);
$application->router->get("/contact", [SiteController::class, "contactPage"]);
$application->router->post("/contact", [SiteController::class, "handleContact"]);

// $application->useRouter($router);
$application->run();

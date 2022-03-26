<?php

require_once(__DIR__ . "/../vendor/autoload.php");

use app\core\Application;

$application = new Application();

$application->router->get("/", "home");

$application->router->get("/contact", "contact");

$application->router->get("/drainage/plumber", function () {
    return "drainage page";
});

// $application->useRouter($router);
$application->run();

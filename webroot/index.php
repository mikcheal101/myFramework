<?php

require_once (__DIR__ . "/../vendor/autoload.php");

use app\core\Application;

$application = new Application();

$application->router->get("/", function () {
    return "Hello World";
});
$application->router->get("/contact", function () {
    return "contact page";
});
$application->router->get("/drainage/plumber", function () {
    return "drainage page";
});

// $application->useRouter($router);
$application->run();

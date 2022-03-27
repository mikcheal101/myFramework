<?php

require_once(__DIR__ . "/../vendor/autoload.php");

use app\core\Application;

$application = new Application(dirname(__DIR__));

$application->router->get("/", "home");
$application->router->get("/contact", "contact");
$application->router->post("/contact", function() {
    return "handling post request";
});

// $application->useRouter($router);
$application->run();

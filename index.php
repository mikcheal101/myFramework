<?php

$application = new Application();

$application->router->get("/", function () {
    return "Hello World";
});

$application->useRouter($router);
$application->run();

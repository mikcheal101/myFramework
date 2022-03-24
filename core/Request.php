<?php

namespace app\core;

/**
 * class Request
 * 
 * @author Hirekaan Micheal Hemen <hirekaan.micheal@gmail.com>
 * @package app\core
 */

class Request
{
    public function getPath()
    {
        $path = $_SERVER["REQUEST_URI"] ?? "/";
        $position = strpos($path, "?");
        echo ("<pre>");
        var_dump($position);
        echo ("</pre>");
        exit;
    }

    public function getMethod()
    {
    }

    public function getBody()
    {
    }
}

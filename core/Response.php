<?php

namespace app\core;

/**
 * @author Hirekaan Micheal Hemen <hirekaan.micheal@gmail.com>
 * 
 * @package app\core
 */

class Response
{

    public function setStatusCode(int $statusCode)
    {
        http_response_code($statusCode);
    }
}

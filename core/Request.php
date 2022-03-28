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
    /**
     * Method to get the path visited.
     * 
     * @return string $path
     */
    public function getPath(): string
    {
        $path = $_SERVER["REQUEST_URI"] ?? "/";
        $position = strpos($path, "?");

        if ($position === false) {
            return $path;
        }

        return substr($path, 0, $position);
    }

    /**
     * Method to get the verb used in accessing the page.
     * 
     * @return string method
     */
    public function method(): string
    {
        return strtolower($_SERVER["REQUEST_METHOD"]);
    }

    /**
     * Method to get the request data
     */
    public function getBody(): array
    {
        $body = [];

        if ($this->method() === "post") {
            foreach ($_GET as $key => $value) {
                $body[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }

        if ($this->method() === "post") {
            foreach ($_POST as $key => $value) {
                $body[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }

        return $body;
    }

    /**
     * Method to confirm if it was a get request
     * 
     * @return bool $method
     */
    public function isGet(): bool
    {
        return $this->method() === "get";
    }

    /**
     * Method to confirm if it was a post request
     * 
     * @return bool $method
     */
    public function isPost(): bool
    {
        return $this->method() === "post";
    }

    /**
     * Method to confirm if it was a put request
     * 
     * @return bool $method
     */
    public function isPut(): bool
    {
        return $this->method() === "put";
    }
}

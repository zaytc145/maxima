<?php

namespace Zayts\Hw6;

class Cookie
{
    public static function set($name, $value)
    {
        return setcookie($name, $value, time() + 3600, "/");
    }

    public static function get($name)
    {
        return isset($_COOKIE[$name]);
    }
}

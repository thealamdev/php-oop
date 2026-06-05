<?php

namespace App\Static;

class Greeting
{
    public static $message = 'Welcome to our application!';

    public function __construct()
    {
        self::welcome();
    }

    public static function welcome()
    {
        echo self::$message;
    }
}

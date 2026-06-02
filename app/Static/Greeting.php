<?php

namespace App\Static;

class Greeting
{

    public function __construct()
    {
        self::welcome();
    }

    public static function welcome()
    {
        echo "Welcome to our application!";
    }
}

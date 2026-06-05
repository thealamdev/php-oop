<?php

namespace App\Static;

class ParentClass
{

    public static $message = 'Good morning';

    public static function show()
    {
        echo static::$message;
    }
}

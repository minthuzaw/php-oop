<?php
require 'first-class.class.php';
use FirstClass\FirstClass;

class SecondClass extends FirstClass
{
    public static string $staticProperty = "A static property! \n";

    public static function anotherTest(): string
    {
        echo parent::EXAMPLE;
        return self::$staticProperty;
    }
}

echo SecondClass::anotherTest();

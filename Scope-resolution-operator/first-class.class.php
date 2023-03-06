<?php

namespace FirstClass;
Abstract class FirstClass
{
    public const EXAMPLE = "You can't change this variable, this is const variable.\n";

    public static function test(): string
    {
        return "Scope resolution operator!\n";
    }
}

/*echo FirstClass::EXAMPLE;
echo FirstClass::test();*/

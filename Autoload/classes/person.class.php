<?php
class Person
{
    private string $name;
    private int $age;
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getPerson(): string
    {
        return $this->name . " is " . $this->age . ' years old.';
    }
}

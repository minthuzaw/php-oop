<?php

//abstract class declaration
abstract class Country
{
    //abstract method (have to implement from concrete classes)
    public abstract function currentPopulation();
    //concrete method (already implemented)
    public function isAsianCountry(): void
    {
        echo "true \n";
    }
}

//using extends keyword to extend the abstract class
class Myanmar extends Country
{
    public function currentPopulation()
    {
        echo "53.7 million \n";
    }
}

class Japan extends Country
{
    public function currentPopulation()
    {
        echo "126.5 million \n";
    }
}

$myanmar = new Myanmar();
$myanmar->currentPopulation();// 53.71 million
//$myanmar->isAsianCountry();// true

$japan = new Japan();
$japan->currentPopulation();//126.5 million
$japan->isAsianCountry();//true

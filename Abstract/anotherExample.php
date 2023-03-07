<?php

abstract class Recipe
{
    protected abstract function addMainIngredient();

    protected function addSalt(): static
    {
        echo "Salt added! \n";
        return $this;
    }

    protected function addPepper(): static
    {
        echo "Pepper added! \n";
        return $this;
    }

    public function cook()
    {
        return $this->addMainIngredient()
            ->addSalt()
            ->addPepper();
    }
}

class ChickenCurry extends Recipe
{
    protected function addMainIngredient(): static
    {
        echo "Add raw chicken! \n";
        return $this;
    }
}

$chickenCurry = new ChickenCurry();
$chickenCurry->cook();

class PorkCurry extends Recipe
{
    protected function addMainIngredient(): static
    {
        echo "Add raw pork! \n";
        return $this;
    }
}

$porkCurry = new PorkCurry();
$porkCurry->cook();

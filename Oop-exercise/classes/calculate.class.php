<?php

class calculate
{
    private string $operator;
    private float $num1;
    private float $num2;

    public function __construct($operator, $num1, $num2)
    {
        $this->operator = $operator;
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function calculator()
    {
        switch ($this->operator) {
            case 'add':
                return $this->num1 + $this->num2;
            case 'sub':
                return $this->num1 - $this->num2;
            case 'div':
                return $this->num1 / $this->num2;
            case 'mul':
                return $this->num1 * $this->num2;
            default:
                echo "Error!";
                break;
        }
    }
}

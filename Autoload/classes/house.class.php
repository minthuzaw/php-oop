<?php

declare(strict_types=1);
class House
{
    private string $streetName;
    private int $no;
    public function __construct($streetName, $no)
    {
        $this->streetName = $streetName;
        $this->no = $no;
    }

    public function getAddress(): string
    {
        return 'No.' . $this->no . ', ' . $this->streetName;
    }
}

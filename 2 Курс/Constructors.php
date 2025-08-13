<?php

namespace App;

class Constructors
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
        echo "Конструктор для" . $name;
    }

    public function __destruct()
    {
        echo "Деструктор для" . $this->name;
    }
}
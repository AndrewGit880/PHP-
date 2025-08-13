<?php

namespace App;

class Person
{
    protected string $name;
    protected string $position;

    public function __construct(string $name, string $position)
    {
        $this->name = $name;
        $this->position = $position;
    }

    public function intro(): string
    {
        return "Привет, меня зовут" . $this->name . " я " . $this->position;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPosition(): string
    {
        return $this->position;
    }
}
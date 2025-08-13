<?php

namespace App;

class Worker2 extends Person
{
    protected float $salary;

    public function __construct(string $name, string $position, float $salary)
    {
        parent::__construct($name, $position);
        $this->salary = $salary;
    }

    public function getSalary(): float
    {
        return $this->salary;
    }

    public function intro(): string
    {
        return parent::intro() . " и я заработал" . $this->salary;
    }
}
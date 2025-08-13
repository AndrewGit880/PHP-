<?php

namespace App;

class Designer extends Worker
{
    private float $designBonus = 1.1;

    public function work(): void
    {
        print_r($this->name . 'is designing');
    }

    public function calculateSalary(int $hoursWork): float
    {
        $Salary = $this->rate * $hoursWork;
        return $Salary * (1 + ($this->experience / 12)) * $this->designBonus;
    }
}
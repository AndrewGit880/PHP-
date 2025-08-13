<?php

namespace App;

class Developer extends Worker
{
    private float $bonus = 1.2;

    public function work(): void
    {
        print_r($this->name . 'is coding');
    }

    public function calculateSalary(int $hoursWork): float
    {
        $Salary = $this->rate * $hoursWork;
        return $Salary * (1 + ($this->experience / 10)) * $this->bonus;
    }
}
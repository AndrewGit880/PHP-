<?php

namespace App;

class Salary
{
    public static function calculateTotalSalary(array $workers, int $hours): float
    {
        $totalSalary = 0;
        foreach ($workers as $worker) {
            $totalSalary += $worker->calculateSalary($hours);
        }
        return $totalSalary;
    }
}
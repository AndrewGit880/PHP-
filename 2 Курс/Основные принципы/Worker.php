<?php

namespace App;

abstract class Worker
{
    protected string $name;
    protected int $experience;
    protected float $rate;

    public function __construct(string $name, int $experience, float $rate)
    {
        $this->name = $name;
        $this->experience = $experience;
        $this->hourRate = $rate;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getExperience(): int
    {
        return $this->experience;
    }

    public function getHourRate(): float
    {
        return $this->rate;
    }

    abstract public function work(): void;

    abstract public function calculateSalary(int $hoursWork): float;
}
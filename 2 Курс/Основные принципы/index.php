<?php

use App\Salary;

require_once '/vendor/autoload.php';


$developer = new \App\Developer('Павел', 5, 200);
$designer = new \App\Designer('Ольга', 3, 180);

$workers = [$developer, $designer];

$hoursWorked = 160;

foreach ($workers as $worker) {
    $worker->work();
    echo $worker->getName() . " зарплата за " . $hoursWork . " часов: " . $worker->calculateSalary($hoursWork);
}


$totalSalary = Salary::calculateTotalSalary($workers, $hoursWork);
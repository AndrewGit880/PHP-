<?php

use App\Person;
use App\Worker2;
use App\Access;
use App\AdminAccess;
use App\EmailNotification;

require_once '/vendor/autoload.php';


$person = new Person("Роман", "Developer");
$worker = new Worker2("Дмитрий", "Manager", 80000);

echo $person->intro();
echo $employee->intro();


$accessLevel = new Access();
$adminAccessLevel = new AdminAccess();

echo "Default access level: " . Access::getDefLevel();
echo "Admin access level: " . $adminAccessLevel->getLevel();


$emailNotification = new EmailNotification();
echo $emailNotification->sendNotification("Мария", "Напоминание о встрече");
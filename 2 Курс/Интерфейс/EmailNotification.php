<?php

namespace App;

class EmailNotification implements NotificationInt
{
    public function sendNotification(string $personName, string $message): string
    {
        return "Отправить письмо" . $personName . " с содержанием:" . $message;
    }
}
<?php

namespace App;

interface NotificationInt
{
    public function sendNotification(string $personName, string $message): string;
}
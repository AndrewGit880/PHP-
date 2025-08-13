<?php

namespace App;

class Access
{
    protected static string $defaultLevel = "Гость";
    protected string $level;

    public function __construct()
    {
        $this->level = self::$defaultLevel;
    }

    public static function getDefLevel(): string
    {
        return self::$defaultLevel;
    }

    public function getLevel(): string
    {
        return $this->level;
    }
}
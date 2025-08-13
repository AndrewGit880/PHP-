<?php

namespace App;

class StaticEx
{
    public static int $count = 0;

    public static function incCount(): void
    {
        self::$count++;
    }

    public static function getCount(): int
    {
        return self::$count;
    }
}
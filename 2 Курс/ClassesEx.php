<?php

namespace App;

class ClassesEx
{
    public string $message = "Hello world!";

    public function display(): void
    {
        print_r($this->message);
    }
}
<?php

namespace App;

class AccessMod
{
    public string $publicVar = "Public";
    protected string $protectedVar = "Protected";
    private string $privateVar = "Private";

    public function show(): void
    {
        print_r($this->publicVar);
        print_r($this->protectedVar);
        print_r($this->privateVar);
    }

    private function getPrivate(): string
    {
        return $this->privateVar;
    }
}
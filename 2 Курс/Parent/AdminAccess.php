<?php

namespace App;

class AdminAccess extends Access
{
    public function __construct()
    {
        parent::__construct();
        $this->level = "Admin";
    }

    public function getLevel(): string
    {
        return parent::getLevel();
    }
}
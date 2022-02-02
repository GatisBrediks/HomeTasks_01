<?php

class Dog
{
    private string $name;
    private string $sex;

    public function __construct(string $name, string $sex)
    {
        $this->name = $name;
        $this->sex = $sex;
    }
}


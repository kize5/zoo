<?php

namespace App;

abstract class Animal
{
    private readonly string $name;

    public function __construct(string $n)
    {
        $this->name = $n;
    }

    abstract protected function getNoise(): string;

    public function noise(): string
    {
        return $this->getNoise();
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

}
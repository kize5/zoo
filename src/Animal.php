<?php

namespace App;

abstract class Animal
{
    private string $name;

    private function __construct( string $n)
{
    $this->name =$n;
}

abstract protected function  getNoise() : string;

    public function noise(){
        return $this->getNoise();
    }

}
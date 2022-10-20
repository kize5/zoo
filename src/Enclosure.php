<?php

namespace App;

class Enclosure
{

    protected $animals = array();

    protected function addAnimal($x) : string
    {
        return 'run, boy run !';
    }

    public function __toString() {
        return $this->animals;
    }

}
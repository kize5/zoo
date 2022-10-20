<?php

namespace App\Animals;

use App\Interfaces\CanSwim;

class BubbleFish extends Fish implements CanSwim
{
    protected function getNoise() :string {
        return "bloubloublou";
    }
}
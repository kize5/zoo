<?php

namespace App\Animals;

use App\Interfaces\CanSwim;

class CatFish extends Fish implements CanSwim
{
    protected function getNoise() :string {
        return "bloubloublou";

    }
}
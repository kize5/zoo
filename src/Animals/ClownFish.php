<?php

namespace App\Animals;

use App\Interfaces\CanSwim;

class ClownFish extends Fish implements CanSwim
{
    protected function getNoise() :string {
        return "bloubloublou";

    }
}
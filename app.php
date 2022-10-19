<?php
require __DIR__ . '/vendor/autoload.php';

use App\Animal;
use App\Animals\BubbleFish;
use App\Animals\CatFish;
use App\Animals\ClownFish;
use App\Animals\Dove;
use App\Animals\Elephant;
use App\Animals\Fish;
use App\Animals\Parrot;
use App\Animals\Zebra;

$animal = array (
    Fish::class=>5,
    BubbleFish::class=> 3,
    CatFish::class=>2,
    ClownFish::class=>1,
    Elephant::class=>2,
    Zebra::class=>1,
    Parrot::class=>10,
    Dove::class=>2,
);

foreach ($animal as $index => $count) {
    for ($i=0; $i< $count; $i++) {
        /** @var \App\Animal $instance */
        $instance = new $index('nom');
        echo $instance->noise() . PHP_EOL;
    }

}

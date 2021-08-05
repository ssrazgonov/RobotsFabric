<?php

require __DIR__.'/vendor/autoload.php';

use App\Robot1;
use App\Robot2;
use App\RobotsFactory;

//Main Robots factory
$robotsFactory = new RobotsFactory();

$robot1Type = new Robot1();
$robot2Type = new Robot2();

$robotsFactory->addType($robot1Type);
$robotsFactory->addType($robot2Type);

try {
    $robotsOf1Type = $robotsFactory->createRobot(Robot1::class, 1);
} catch (Exception $e) {
    echo $e->getMessage();
}

try {
    $robotsOf1Type = $robotsFactory->createRobot(Robot2::class, 1);
} catch (Exception $e) {
    echo $e->getMessage();
}
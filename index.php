<?php

require __DIR__.'/vendor/autoload.php';

use App\Robot1;
use App\Robot2;
use App\RobotsFactory;
use App\RobotsMerger;

$robotsFactory = new RobotsFactory();
$robotsMerger = new RobotsMerger();

$robot1Type = new Robot1();
$robot2Type = new Robot2();

$robotsFactory->addType($robot1Type);
$robotsFactory->addType($robot2Type);

try {
    $robotsOf1Type = $robotsFactory->createRobot(Robot1::class, 5);
} catch (Exception $e) {
    echo $e->getMessage();
}

try {
    $robotsOf2Type = $robotsFactory->createRobot(Robot2::class, 3);
} catch (Exception $e) {
    echo $e->getMessage();
}

$robotsMerger->addRobot($robotsOf1Type[0]);
$robotsMerger->addRobot($robotsOf2Type[0]);
$robotsFactory->addType($robotsMerger);

try {
    $superMergedRobot = $robotsFactory->createRobot(RobotsMerger::class , 1, true)[0];
} catch (Exception $e) {
    echo $e->getMessage();
}

echo "Mass of merged robot - " . $superMergedRobot->getMass() . "<br>";
echo "Speed of merged robot - " . $superMergedRobot->getSpeed() . "<br>";
echo "Height of merged robot - " . $superMergedRobot->getHeight() . "<br>";
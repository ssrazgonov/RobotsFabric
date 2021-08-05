<?php

require __DIR__.'/vendor/autoload.php';

use App\Robot1;
use App\RobotsFactory;

$robotsFactory = new RobotsFactory();

$robot1 = new Robot1();

$robotsFactory->addType($robot1);
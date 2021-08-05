<?php

namespace App;

/**
 * Creates Robots objects
 * Class RobotsFactory
 */
class RobotsFactory
{
    private $createRobotsMethods = [];
    /**
     * RobotsFactory constructor.
     */
    public function __construct()
    {
    }


    public function addType(Robot $robot) {
        $className = $this->getRobotClassName($robot);
    }

    private function getRobotClassName(Robot $robot) {
        return (new \ReflectionClass($robot))->getShortName();
    }

}
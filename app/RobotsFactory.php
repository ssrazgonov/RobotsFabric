<?php

namespace App;

use function Couchbase\defaultDecoder;

/**
 * Creates Robots objects
 * Class RobotsFactory
 */
class RobotsFactory
{
    private $availableRobotTypes = [];

    /**
     * RobotsFactory constructor.
     */
    public function __construct()
    {
    }

    /**
     * @param Robot $robot
     */
    public function addType(Robot $robot) {
        
        $className = $this->getRobotClassName($robot);
        $this->availableRobotTypes[$className] = true;
    }

    /**
     * @param $RobotClassName
     * @param $amount
     * @return array
     * @throws \Exception
     */
    public function createRobot($RobotClassName, $amount) {

        if (!array_key_exists($RobotClassName, $this->availableRobotTypes)) {
            throw new \Exception("данный тип роботов не зарегистрирован");
        }

        $robots = [];

        for ($i = 0; $i < $amount; $i++) {
            $robots[] = new $RobotClassName();
        }

        return $robots;
    }

    /**
     * @param Robot $robot
     * @return string
     */
    private function getRobotClassName(Robot $robot) {
        return get_class($robot);
    }

}
<?php

namespace App;

use Exception;
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
        $this->availableRobotTypes[$className] = $robot;
    }

    /**
     * @param $RobotClassName
     * @param $amount int
     * @param $cloneProps boolean
     * @return array
     * @throws Exception
     */
    public function createRobot($RobotClassName, $amount, $cloneProps = false) {

        if (!array_key_exists($RobotClassName, $this->availableRobotTypes)) {
            throw new Exception("данный тип роботов не зарегистрирован");
        }

        $robots = [];

        for ($i = 0; $i < $amount; $i++) {
            $newRobot = new $RobotClassName();

            if ($cloneProps) {
               $this->cloneProps($newRobot, $RobotClassName);
            }

            $robots[] = $newRobot;
        }

        return $robots;
    }

    /**
     * @param Robot $robot
     * @param $availableRobotTypesKey
     */
    private function cloneProps(Robot $robot, $availableRobotTypesKey) {
        foreach (Robot::getSetters() as $getter => $setter) {
            $robot->$setter($this->availableRobotTypes[$availableRobotTypesKey]->$getter());
        }
    }

    /**
     * @param Robot $robot
     * @return string
     */
    private function getRobotClassName(Robot $robot) {
        return get_class($robot);
    }

}
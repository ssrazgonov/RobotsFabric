<?php


namespace App;


Trait MergerTrait
{
    private $robots = [];

    public function addRobot(Robot $robot) {

        if (empty($this->robots)) {
            $this->setProps($robot);
        }

        $this->robots[] = $robot;

        foreach ($this->robots as $robot) {
            $this->recalculateProps($robot);
        }
    }

    private function setProps(Robot $robot) {
        $this->setHeight($robot->getHeight());
        $this->setMass($robot->getMass());
        $this->setSpeed($robot->getSpeed());
    }

    private function recalculateProps(Robot $robot) {
        $this->recalculateMass($robot);
        $this->recalculateSpeed($robot);
    }

    private function recalculateMass(Robot $robot) {
        $this->setMass($robot->getMass() > $this->getMass() ? $robot->getMass() : $this->getMass());
    }

    private function recalculateSpeed(Robot $robot) {
        $this->setSpeed($robot->getSpeed() < $this->getSpeed() ? $robot->getSpeed() : $this->getSpeed());
    }
}
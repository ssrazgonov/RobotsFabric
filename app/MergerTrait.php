<?php


namespace App;

/**
 * Трейт для расширения класса Robots до уровня Merger;
 *
 * Trait MergerTrait
 * @package App
 */
Trait MergerTrait
{
    private $robots = [];

    /**
     * Основная функция добавления робота к мерджу
     * @param Robot $robot
     */
    public function addRobot(Robot $robot) {

        if (empty($this->robots)) {
            $this->setProps($robot);
        }

        $this->robots[] = $robot;

        foreach ($this->robots as $robot) {
            $this->recalculateProps($robot);
        }
    }

    /**
     * Заполнение полей при добавление первого робота, для корректного расчета впоследствии
     * @param Robot $robot
     */
    private function setProps(Robot $robot) {
        $this->setHeight($robot->getHeight());
        $this->setMass($robot->getMass());
        $this->setSpeed($robot->getSpeed());
    }

    /**
     * Перерасчет параметров при добавлении робота к мерджу
     * @param Robot $robot
     */
    private function recalculateProps(Robot $robot) {
        $this->recalculateMass($robot);
        $this->recalculateSpeed($robot);
    }

    /**
     * @param Robot $robot
     */
    private function recalculateMass(Robot $robot) {
        $this->setMass($robot->getMass() > $this->getMass() ? $robot->getMass() : $this->getMass());
    }

    /**
     * @param Robot $robot
     */
    private function recalculateSpeed(Robot $robot) {
        $this->setSpeed($robot->getSpeed() < $this->getSpeed() ? $robot->getSpeed() : $this->getSpeed());
    }
}
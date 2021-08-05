<?php

namespace App;

/**
 * Class Robot
 * @package App
 */
class Robot
{

    protected $mass = 0;
    protected $speed = 0;
    protected $height = 0;

    const MASS = "setMass";
    const SPEED = "setSpeed";
    const HEIGHT = "setHeight";

    public static function getSetters() {
        return [
            "getMass" => "setMass",
            "getSpeed" => "setSpeed",
            "getHeight" => "setHeight"
        ];
    }

    /**
     * @return mixed
     */
    public function getMass()
    {
        return $this->mass;
    }

    /**
     * @return mixed
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $mass
     */
    public function setMass($mass)
    {
        $this->mass = $mass;
    }

    /**
     * @param mixed $speed
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }
}
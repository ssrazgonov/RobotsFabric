<?php

namespace App;

/**
 * Class Robot
 * @package App
 */
class Robot
{
    protected $mass;
    protected $speed;
    protected $height;
    public function __construct()
    {
        $this->mass   = 0;
        $this->speed  = 0;
        $this->height = 0;
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
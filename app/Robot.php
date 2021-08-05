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
}
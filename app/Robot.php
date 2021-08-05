<?php

namespace App;

/**
 * Базовый класс роботов
 * Class Robot
 * @package App
 */
class Robot
{

    protected $mass = 0;
    protected $speed = 0;
    protected $height = 0;

    /**
     * возвращает геттеры и сеттеры для динамического использования в коде
     * @return array
     */
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
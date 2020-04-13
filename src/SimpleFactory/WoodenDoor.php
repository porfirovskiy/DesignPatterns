<?php
/**
 * Created by PhpStorm.
 * Date: 13.04.20
 * Time: 22:41
 */

namespace DesignPatterns\SimpleFactory;


class WoodenDoor implements DoorInterface
{
    protected $width;
    protected $height;

    public function __construct(float $width, float $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getWidth(): float
    {
        return $this->width;
    }

    public function getHeight(): float
    {
        return $this->height;
    }
}
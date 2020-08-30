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

    public function __construct()
    {
        $this->width = 100;
        $this->height = 350;
    }

    public function getWidth(): float
    {
        return $this->width;
    }

    public function getHeight(): float
    {
        return $this->height;
    }
    
    public function getType(): string
    {
        return 'wood';
    }
}
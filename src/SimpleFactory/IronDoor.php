<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DesignPatterns\SimpleFactory;

/**
 * Description of IronDoor
 *
 * @author porfirovskiy
 */
class IronDoor implements DoorInterface
{
    protected $width;
    protected $height;

    public function __construct()
    {
        $this->width = 120;
        $this->height = 370;
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
        return 'iron';
    }
}

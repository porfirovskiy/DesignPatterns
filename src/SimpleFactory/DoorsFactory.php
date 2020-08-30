<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DesignPatterns\SimpleFactory;

/**
 * Description of DoorsFactory
 *
 * @author porfirovskiy
 */
class DoorsFactory 
{
    public static function makeDoor(string $type): DoorInterface
    {
        $type = strtolower($type);
        
        switch ($type) {
            case 'woodendoor': return new WoodenDoor();
            case 'irondoor': return new IronDoor();
            default:
                throw new \Exception('Wrong door type passed.');
        }
    }
}

<?php
/**
 * Created by PhpStorm.
 * Date: 13.04.20
 * Time: 22:42
 */

namespace DesignPatterns\SimpleFactory;


class DoorFactory
{
    public static function makeWoodenDoor(): DoorInterface
    {
        return new WoodenDoor();
    }
}
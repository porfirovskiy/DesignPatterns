<?php

use DesignPatterns\SimpleFactory\DoorFactory;

require_once 'vendor/autoload.php';

$newDoor = DoorFactory::makeDoor(100, 200);

echo "Width: " . $newDoor->getWidth() . "\n";
echo "Height: " . $newDoor->getHeight() . "\n";
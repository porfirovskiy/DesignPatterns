<?php
declare(strict_types=1);

namespace DesignPatterns\SimpleFactory\Test;

use DesignPatterns\SimpleFactory\DoorFactory;
use DesignPatterns\SimpleFactory\DoorsFactory;
use DesignPatterns\SimpleFactory\WoodenDoor;
use DesignPatterns\SimpleFactory\IronDoor;
use PHPUnit\Framework\TestCase;

/**
 * Description of SimpleFactoryTest
 *
 * @author porfirovskiy
 */
class SimpleFactoryTest extends TestCase 
{
    public function testCanMakeDoor()
    {
        $door = (new DoorFactory())->makeWoodenDoor();
        $this->assertInstanceOf(WoodenDoor::class, $door);
    }
    
    public function testCanMakeIronDoor()
    {
        $door = (new DoorsFactory())->makeDoor('IronDoor');
        $this->assertInstanceOf(IronDoor::class, $door);
    }
    
    public function testCanMakeWoodenDoors()
    {
        $door = (new DoorsFactory())->makeDoor('WoodenDoor');
        $this->assertInstanceOf(WoodenDoor::class, $door);
    }
    
    public function testCanMakeOtherDoors()
    {
        $door = (new DoorsFactory())->makeDoor('GlassDoor');
    }
}

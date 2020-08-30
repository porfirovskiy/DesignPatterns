<?php
declare(strict_types=1);

namespace DesignPatterns\FactoryMethod\Test;

use PHPUnit\Framework\TestCase;
use DesignPatterns\FactoryMethod\FacebookPoster;
use DesignPatterns\FactoryMethod\LinkedInPoster;

/**
 * Description of FactoryMethodTest
 *
 * @author porfirovskiy
 */
class FactoryMethodTest extends TestCase
{
    public function testCanMakeFacebookPost()
    {
        $poster = new FacebookPoster("kolya", "1q2");
        $poster->post('Test text 1');
        
        //$this->assertInstanceOf(WoodenDoor::class, $door);
    }
    
    public function testCanMakeLinkedInPost()
    {
        $poster = new LinkedInPoster("vasya@ff.com", "d34df323");
        $poster->post('Test text 1');
        
        //$this->assertInstanceOf(WoodenDoor::class, $door);
    }
}

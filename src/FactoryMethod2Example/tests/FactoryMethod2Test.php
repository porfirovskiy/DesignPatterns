<?php
declare(strict_types=1);

namespace DesignPatterns\FactoryMethod2Example\Test;

use PHPUnit\Framework\TestCase;
use DesignPatterns\FactoryMethod2Example\ConsoleLogger;
use DesignPatterns\FactoryMethod2Example\FileLogger;
use DesignPatterns\FactoryMethod2Example\ConsoleLoggerFactory;
use DesignPatterns\FactoryMethod2Example\FileLoggerFactory;

/**
 * Description of FactoryMethod2Test
 *
 * @author porfirovskiy
 */
class FactoryMethod2Test extends TestCase
{
 public function testCanCreateStdoutLogging()
    {
        $loggerFactory = new ConsoleLoggerFactory();
        $logger = $loggerFactory->createLogger();

        $this->assertInstanceOf(ConsoleLogger::class, $logger);
    }

    public function testCanCreateFileLogging()
    {
        $loggerFactory = new FileLoggerFactory();
        $logger = $loggerFactory->createLogger();

        $this->assertInstanceOf(FileLogger::class, $logger);
    }
}

/**
 * example of simple understandable factory
 * https://designpatternsphp.readthedocs.io/ru/latest/Creational/FactoryMethod/README.html
 */

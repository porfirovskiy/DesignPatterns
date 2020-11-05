<?php

namespace DesignPatterns\FactoryMethod2Example;

/**
 * Description of ConsoleLoggerFactory
 *
 * @author porfirovskiy
 */
class ConsoleLoggerFactory implements LoggerFactory 
{
    public function createLogger(): Logger
    {
        return new ConsoleLogger();
    }
}

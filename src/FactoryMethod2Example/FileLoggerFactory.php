<?php

namespace DesignPatterns\FactoryMethod2Example;

/**
 * Description of FileLoggerFactory
 *
 * @author porfirovskiy
 */
class FileLoggerFactory implements LoggerFactory 
{
    public function createLogger(): Logger
    {
        return new FileLogger();
    }
}

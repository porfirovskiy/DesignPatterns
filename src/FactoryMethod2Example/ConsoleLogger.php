<?php

namespace DesignPatterns\FactoryMethod2Example;

/**
 * Description of ConsoleLogger
 *
 * @author porfirovskiy
 */
class ConsoleLogger implements Logger 
{
    public function log(string $message): void
    {
        echo 'logger 1';
    }
}

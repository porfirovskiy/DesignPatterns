<?php

namespace DesignPatterns\FactoryMethod2Example;

/**
 * Description of FileLogger
 *
 * @author porfirovskiy
 */
class FileLogger implements Logger 
{
    public function log(string $message): void
    {
        echo 'Logger 2';
    }
}

<?php

namespace DesignPatterns\FactoryMethod2Example;

/**
 *
 * @author porfirovskiy
 */
interface LoggerFactory 
{
    public function createLogger(): Logger;
}

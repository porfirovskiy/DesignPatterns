<?php

namespace DesignPatterns\FactoryMethod2Example;

/**
 *
 * @author porfirovskiy
 */
interface Logger 
{
    public function log(string $message): void;
}

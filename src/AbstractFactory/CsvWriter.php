<?php

namespace DesignPatterns\AbstractFactory;

interface CsvWriter
{
    public function write(array $line): string;
}
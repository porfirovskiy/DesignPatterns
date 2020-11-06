<?php declare(strict_types=1);

namespace DesignPatterns\AbstractFactory\Tests;

use DesignPatterns\AbstractFactory\CsvWriter;
use DesignPatterns\AbstractFactory\JsonWriter;
use DesignPatterns\AbstractFactory\UnixWriterFactory;
use DesignPatterns\AbstractFactory\WinWriterFactory;
use DesignPatterns\AbstractFactory\WriterFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function provideFactory()
    {
        return [
            [new UnixWriterFactory()],
            [new WinWriterFactory()]
        ];
    }

    /**
     * @dataProvider provideFactory
     *
     * @param WriterFactory $writerFactory
     */
    public function testCanCreateCsvWriterOnUnix(WriterFactory $writerFactory)
    {
        $this->assertInstanceOf(JsonWriter::class, $writerFactory->createJsonWriter());
        $this->assertInstanceOf(CsvWriter::class, $writerFactory->createCsvWriter());
    }
}

//example of simple understandable abstract factory
https://designpatternsphp.readthedocs.io/ru/latest/Creational/AbstractFactory/README.html

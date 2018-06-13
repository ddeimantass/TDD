<?php

namespace Testing\Tests;

use Testing\Model\Car;
use PHPUnit\Framework\TestCase;

class CarTest extends TestCase
{
    /**
     * @dataProvider numberProvider
     */
    public function testGetNumber($number)
    {
        $car = new Car($number);
        $this->assertEquals($number, $car->getNumber());
    }
    
    public function numberProvider()
    {
        return [
            ['DEV 001'],
            ['DEV 002'],
            ['TDD 001']
        ];
    }
}
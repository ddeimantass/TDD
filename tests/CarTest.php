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
    
    /**
     * @dataProvider correctSizeProvider
     */
    public function testGetSizeSuccess($number, $size)
    {
        $car = new Car($number, $size);
        $this->assertEquals($size, $car->getSize());
    }
    
    /**
     * @dataProvider incorrectDataProvider
     * @expectedException InvalidArgumentException
     */
    public function testIncorrectData($number, $size)
    {
        new Car($number, $size);
    }
    
    public function numberProvider()
    {
        return [
            ['DEV 001'],
            ['DEV 002'],
            ['TDD 001']
        ];
    }
    
    /**
     * @return array
     */
    public function correctSizeProvider()
    {
        return [
            ['', 30],
            ['', 1],
            ['', 99],
        ];
    }
    
    /**
     * @return array
     */
    public function incorrectDataProvider()
    {
        return [
            ['', 0],
            ['', -2],
            ['', ''],
            [2, 1],
            [true, 1],
            [['ok'], 1],
        ];
    }
}
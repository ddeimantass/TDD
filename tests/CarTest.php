<?php

namespace Testing\Tests;

use Testing\Model\Car;
use PHPUnit\Framework\TestCase;

class CarTest extends TestCase
{
    /**
     * @dataProvider correctDataProvider
     */
    public function testGetSizeSuccess($number, $length, $width)
    {
        $car = new Car($number, $length, $width);
        $this->assertEquals($number, $car->getNumber());
        $this->assertEquals($length, $car->getLength());
        $this->assertEquals($width, $car->getWidth());
    }
    
    /**
     * @dataProvider incorrectDataProvider
     * @expectedException InvalidArgumentException
     */
    public function testIncorrectData($number, $length, $width)
    {
        new Car($number, $length, $width);
    }
    
    /**
     * @return array
     */
    public function correctDataProvider()
    {
        return [
            ['DEV 001', 30,2],
            ['DEV 002', 1,1],
            ['DEV 011', 99,5],
        ];
    }
    
    /**
     * @return array
     */
    public function incorrectDataProvider()
    {
        return [
            ['', 0, 1],
            ['', -2, 1],
            ['', '', 1],
            [2, 1, 1],
            [true, 1, 1],
            [['ok'], 1, 1],
            ['', 99, 0],
        ];
    }
}
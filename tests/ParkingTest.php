<?php

namespace Testing\Tests;

use PHPUnit\Framework\TestCase;
use Testing\Model\Parking;

class ParkingTest extends TestCase
{
    /**
     * @dataProvider correctSizeProvider
     */
    public function testcorrectSize($length, $width)
    {
        $parking = new Parking($length, $width);
        $this->assertEquals($length, $parking->getLength());
        $this->assertEquals($width, $parking->getWidth());
    }
    
    /**
     * @dataProvider incorrectSizeProvider
     * @expectedException InvalidArgumentException
     */
    public function testincorrectSize($length, $width)
    {
        new Parking($length, $width);
    }
    
    /**
     * @return array
     */
    public function correctSizeProvider()
    {
        return [
            [20, 30],
            [1, 1],
            [99, 99],
        ];
    }
    
    /**
     * @return array
     */
    public function incorrectSizeProvider()
    {
        return [
            [0, 30],
            [-9, 30],
        ];
    }
}
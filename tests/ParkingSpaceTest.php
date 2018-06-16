<?php

namespace Testing\Tests;

use PHPUnit\Framework\TestCase;
use Testing\Model\Parking;
use Testing\Model\Car;

class ParkingSpaceTest extends TestCase
{
    /**
     * @dataProvider correctDataProvider
     */
    public function testparkingSpaceSuccess($carSize, $parkingLength, $ParkingWidth, $exepcted)
    {
        $car = new Car('', $carSize);
        $parking = new Parking($parkingLength, $ParkingWidth, $carSize);
        $this->assertEquals($exepcted, $parking->getSpaceCount());
    }

    /**
     * @return array
     */
    public function correctDataProvider()
    {
        return [
            [2, 4, 2, 2],
            [1, 1, 2, 1],
            [99, 99, 9801, 6534],
        ];
    }
}
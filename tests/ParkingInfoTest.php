<?php

namespace Testing\Tests;

use PHPUnit\Framework\TestCase;
use Testing\Model\Car;
use Testing\Model\Parking;
use Testing\Provider\ParkingInfoProvider;

class ParkingInfoTest extends TestCase
{
    public function testSize()
    {
        $parkingInfo = new ParkingInfoProvider();
        $parking = new Parking(1,1);
        $this->assertEquals(1, $parkingInfo->getSize($parking->getWidth(), $parking->getLength()));
    }
    
    public function testParkingSpace()
    {
        $parkingInfo = new ParkingInfoProvider();
        $parking = new Parking(1,2);
        $car = new Car('', 1,1);
        $this->assertEquals(1, $parkingInfo->getCarSpaces($parking, [$car]));
    }
}
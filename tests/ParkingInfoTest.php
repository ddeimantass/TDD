<?php

namespace Testing\Tests;

use PHPUnit\Framework\TestCase;
use Testing\Model\Parking;
use Testing\Provider\ParkingInfoProvider;

class ParkingInfoTest extends TestCase
{
    public function testParkingSpaceSuccess()
    {
        $parkingInfo = new ParkingInfoProvider();
        $parking = new Parking(1,1);
        $this->assertEquals(1, $parkingInfo->getSize($parking->getWidth(), $parking->getLength()));
    }
}
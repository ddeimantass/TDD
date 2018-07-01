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
        $this->assertEquals(1, $parkingInfo->getSize(1, 1));
        
    }
}
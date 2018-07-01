<?php

namespace Testing\Tests;

use PHPUnit\Framework\TestCase;
use Testing\Provider\ParkingInfoProvider;

class ParkingInfoTest extends TestCase
{
    public function testParkingSpaceSuccess()
    {
        $parkingInfo = new ParkingInfoProvider();
    }
}
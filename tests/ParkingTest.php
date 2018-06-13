<?php

namespace Testing\Tests;

use PHPUnit\Framework\TestCase;
use Testing\Model\Parking;

class ParkingTest extends TestCase
{
    public function testParking()
    {
        $parking = new Parking();
        $this->assertInstanceOf(Parking::class, $parking);
    }
}
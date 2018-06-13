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
    
    public function testLength()
    {
        $parking = new Parking();
        $this->assertEquals(1, $parking->getLength());
    }
}
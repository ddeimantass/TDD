<?php

namespace Testing\Tests;

use PHPUnit\Framework\TestCase;
use Testing\Model\Parking;

class ParkingTest extends TestCase
{
    public function testLength()
    {
        $parking = new Parking();
        $this->assertEquals(1, $parking->getLength());
    }
}
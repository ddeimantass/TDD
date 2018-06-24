<?php

namespace Testing\Tests;

use PHPUnit\Framework\TestCase;
use Testing\Model\Parking;
use Testing\Model\Car;
use Testing\Provider\ParkingInfoProvider;

class ParkingInfoTest extends TestCase
{
    /**
     * @dataProvider correctDataProvider
     */
    public function testparkingSpaceSuccess($cars, $parkingLength, $ParkingWidth, $exepcted)
    {
        $parking = new Parking($parkingLength, $ParkingWidth);
        $parkingInfo = new ParkingInfoProvider();
        $this->assertEquals($exepcted, $parkingInfo->getCarSpaces($parking, $cars));
    }

    /**
     * @return array
     */
    public function correctDataProvider()
    {
        $cars =[
            new Car('small',1,1),
            new Car('suv',2,2),
            new Car('mid',1,2),
            new Car('bus',2,4),
        ];
        
        return [
            [$cars, 1, 1, 0],
            [$cars, 2, 1, 1],
            [$cars, 5, 3, 3],
            [$cars, 7, 9, 4],
        ];
    }
}
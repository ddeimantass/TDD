<?php

namespace Testing\Tests;

use PHPUnit\Framework\TestCase;
use Testing\Model\Car;
use Testing\Model\Parking;
use Testing\Provider\ParkingInfoProvider;

class ParkingInfoTest extends TestCase
{
    /**
     * @dataProvider correctDataProvider
     */
    public function testParkingSpaceSuccess($cars, $parking, $exepcted)
    {
        $parkingInfo = new ParkingInfoProvider();
        $this->assertEquals($exepcted, $parkingInfo->getCarSpaces($parking, $cars));
    }
    
    /**
     * @return array
     */
    public function correctDataProvider()
    {
        $cars =[
            new Car('bus',2,4),
            new Car('mid',1,2),
            new Car('small',1,1),
            new Car('suv',2,2),
            
        ];
        
        $parkings =[
            new Parking(1,1),
            new Parking(2, 1),
            new Parking(5, 3),
            new Parking(7, 9),
        ];
        
        return [
            [$cars, $parkings[0], 0],
            [$cars, $parkings[1], 1],
            [$cars, $parkings[2], 3],
            [$cars, $parkings[3], 4],
        ];
    }
}
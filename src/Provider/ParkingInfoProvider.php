<?php

namespace Testing\Provider;

use Testing\Model\Parking;

class ParkingInfoProvider
{
    private $SPACE = 1.5;
    
    /**
     * @return float|int
     */
    public function getSize($width, $length)
    {
        return $width * $length;
    }
    
    /**
     * @param array $cars
     * @return array
     */
    public function getCarSizes(array $cars){
        $CarsSize = [];
        
        foreach($cars as $car){
            $CarsSize[] = $this->getSize($car->getWidth(), $car->getLength());
        }
        
        return $CarsSize;
    }
    
    /**
     * @param $parking
     * @param $cars
     * @return int
     */
    public function getCarSpaces(Parking $parking, array $cars)
    {
        $parkingSize = $this->getSize($parking->getWidth(), $parking->getLength());
        $carSizes = $this->getCarSizes($cars);
        $counter = 0;
        
        foreach ($carSizes as $carSize){
            $parkingSize -= $carSize * $this->SPACE;
            if($parkingSize <= 0){
                return $counter;
            }
            $counter++;
        }
        
        return $counter;
    }
}
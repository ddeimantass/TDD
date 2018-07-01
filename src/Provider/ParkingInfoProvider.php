<?php

namespace Testing\Provider;

class ParkingInfoProvider
{
    /**
     * @return float|int
     */
    public function getSize($width, $length)
    {
        return $width * $length;
    }
    
    /**
     * @param $parking
     * @param $cars
     * @return int
     */
    public function getCarSpaces($parking, $cars)
    {
        $parkingSize = $this->getSize($parking->getWidth(), $parking->getLength());
        $CarsSize = [];
        foreach($cars as $car){
            $CarsSize[] = $this->getSize($car->getWidth(), $car->getLength());
        }
        $counter = 0;
        foreach ($CarsSize as $carSize){
            $parkingSize -= $carSize * 1.5;
            if($parkingSize <= 0){
                return $counter;
            }
            $counter++;
        }
        
        return $counter;
    }
}
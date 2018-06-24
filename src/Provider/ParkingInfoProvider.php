<?php

namespace Testing\Provider;

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
     * @param $cars
     * @return bool
     */
    public function getSortedCarSizes($cars){
        $CarsSize = [];
    
        foreach($cars as $car){
            $CarsSize[] = $this->getSize($car->getWidth(), $car->getLength());
        }
        asort($CarsSize);
        
        return $CarsSize;
    }
    
    /**
     * @param $parking
     * @param $cars
     * @return int
     */
    public function getCarSpaces($parking, $cars)
    {
        $parkingSize = $this->getSize($parking->getWidth(), $parking->getLength());
        $carSizes = $this->getSortedCarSizes($cars);
        
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
<?php

namespace Testing\Model;

use PHPUnit\Exception;

class Parking
{
    private $SPACE = 1.5;
    private $length;
    private $width;
    private $carSize;
    
    /**
     * Parking constructor.
     * @param $length
     * @param $width
     */
    public function __construct($length, $width, $carSize = 1)
    {
        if($length > 0 && $width > 0 && $carSize > 0 && $this->SPACE > 1){
            $this->width = $width;
            $this->length = $length;
            $this->carSize = $carSize;
        }
        else{
            throw new \InvalidArgumentException();
        }
        
    }
    
    /**
     * @return mixed
     */
    public function getLength()
    {
        return $this->length;
    }
    
    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }
    
    /**
     * @return float|int
     */
    public function getSize()
    {
        return $this->width * $this->length;
    }
    
    public function getSpaceCount()
    {
        return intval($this->getSize() / ($this->carSize * $this->SPACE));
    }
}
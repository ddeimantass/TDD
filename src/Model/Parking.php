<?php

namespace Testing\Model;

class Parking
{
    private $length;
    private $width;
    
    /**
     * Parking constructor.
     * @param $length
     * @param $width
     */
    public function __construct($length, $width)
    {
        if($length > 0 && $width > 0){
            $this->width = $width;
            $this->length = $length;
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
}
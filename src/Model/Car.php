<?php

namespace Testing\Model;

class Car
{
    private $number;
    private $width;
    private $length;
    
    public function __construct($number, $length, $width)
    {
        if(is_string($number) && $length > 0 && $width > 0 ){
            $this->number = $number;
            $this->width = $width;
            $this->length = $length;
        }
        else{
            throw new \InvalidArgumentException();
        }
    }
    
    public function getNumber()
    {
        return $this->number;
    }
    
    public function getWidth()
    {
        return $this->width;
    }
    
    public function getLength()
    {
        return $this->length;
    }
}
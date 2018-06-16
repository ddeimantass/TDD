<?php

namespace Testing\Model;

class Car
{
    private $number;
    private $size;
    
    public function __construct($number, $size = 1)
    {
        if($size > 0 && is_string($number)){
            $this->number = $number;
            $this->size = $size;
        }
        else{
            throw new \InvalidArgumentException();
        }
    }
    
    public function getNumber()
    {
        return $this->number;
    }
    
    public function getSize()
    {
        return $this->size;
    }
}
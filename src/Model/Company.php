<?php

namespace Testing\Model;

class Company
{
    private $title;
    private $parkings;
    
    public function __construct($title = 'defComp', $parkings = [])
    {
        $this->parkings = $parkings;
        $this->title = $title;
    }
    
    public function getTitle()
    {
        return $this->title;
    }
    
    public function getParkings()
    {
        return $this->parkings;
    }
    
    public function addParking($parking)
    {
        $this->parkings[$parking] = $parking;
    }
    
    public function removeParking($parking)
    {
        unset($this->parkings[$parking]);
    }
}
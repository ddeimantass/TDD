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
}
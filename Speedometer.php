<?php

class Speedometer
{
    public const MILES_CONVERSION = 0.6215;

    public static function convertKmToMiles(float $distance): float
    {
        return $distance *= self::MILES_CONVERSION;
    }
    
    public static function convertMilesToKm(float $distance): float
    {
        return $distance /= self::MILES_CONVERSION;
    }
}
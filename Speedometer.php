<?php

require_once 'Vehicle.php';

class Speedometer
{
    public const GET_MILES = 0.621;
    public const GET_KILOMETERS = 1.609;
    

    public static function convertKmToMiles(float $km) {
        return number_format(($km * self::GET_MILES), 2);
    }

    public static function convertMilesToKm(float $miles) {
        return number_format(($miles * self::GET_KILOMETERS), 2);
    }
}
echo Speedometer::convertKmToMiles(10) . "<br>";
echo Speedometer::convertMilesToKm(10);
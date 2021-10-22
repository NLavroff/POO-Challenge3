<?php

require_once 'HighWay.php';
require_once 'Skateboard.php';
require_once 'Bicycle.php';

final class ResidentialWay extends HighWay
{
    const NB_LANE = 2;
    const MAX_SPEED = 50;

    public function __construct()
    {
        parent::__construct(self::NB_LANE, self::MAX_SPEED);
    }
    public function addVehicle(Vehicle $vehicle)
    {
            $this->currentVehicles[] = $vehicle;
    }
}
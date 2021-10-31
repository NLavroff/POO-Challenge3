<?php

require_once 'Vehicle.php';

interface RechargeableInterface
{
    public function charge(int $percentage): int;
    public function unLoad(int $percentage): int;
}
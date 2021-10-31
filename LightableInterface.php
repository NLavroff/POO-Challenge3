<?php

require_once 'Vehicle.php';

interface LightableInterface
{
    public function switchOn(bool $switchOn): bool;
    public function switchOff(bool $switchOff): bool;
}
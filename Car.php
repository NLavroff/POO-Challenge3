<?php


require_once 'LightableInterface.php';

class Car extends Vehicle implements LightableInterface
{
    protected string $energy;
    private int $energyLevel;
    private bool $hasParkBrake = false;

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }
    public function getEnergy(): string
    {
        return $this->energy;
    }
    public function setEnergy(string $energy) : void
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
    }
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }
    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
    public function getHasParkBrake(): bool
    {
        return $this->hasParkBrake;
    }
    public function  setParkBrake(bool $hasParkBrake): void
    {
        $this->hasParkBrake = $hasParkBrake;
    }
    public function start()
    {
        if ($this->hasParkBrake == true) {
            throw new Exception ('Le frein à main est actif');
        }
    }
    public function switchOn(): bool
    {
        return $this->switchOn = true;
    }
    public function switchOff(): bool
    {
        return $this->switchOff = false;
    }
}
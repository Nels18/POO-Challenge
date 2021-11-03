<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Car extends Vehicle implements LightableInterface
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    
    private string $energy;

    private int $energyLevel;

    private bool $hasParkBrake = true;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function getParkBrake(): bool
    {
        return $this->hasParkBrake;
    }

    public function setParkBrake(): void
    {
        if ($this->hasParkBrake) {
            $this->hasParkBrake = false;
        } else {
            $this->hasParkBrake = true;
        }
    }

    public function start(): string
    {
        if ($this->hasParkBrake) {
            throw new LogicException("Warning: the parking brake is activated !");
        }
        $this->currentSpeed = 0;

        return 'Ready to go !';
    }

    public function switchOn(): bool
    {
        return true;
    }

    public function switchOff(): bool
    {
        return false;
    }
}

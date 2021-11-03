<?php
require_once 'Vehicle.php';

class Truck extends Vehicle
{
    
    private string $energy;

    private int $energyLevel;

    private int $storageCapacity;

    private int $loading = 0;

    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->storageCapacity = $storageCapacity;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): void
    {
        $this->energy = $energy;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function getLoading(): int
    {
        return $this->loading;
    }

    public function setLoading(int $loading): void
    {
        if ($loading <= $this->storageCapacity) {
            $this->loading = $loading;
        } else {
            $this->loading = $this->storageCapacity;
        }
    }

    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    public function setStorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }

    public function isFull()
    {
        $sentence = "";
        if ($this->loading < $this->storageCapacity) {
            $sentence .= "In filling.";
        } else {
            $sentence .= "Full.";
        }
        
        return $sentence;
    }
}

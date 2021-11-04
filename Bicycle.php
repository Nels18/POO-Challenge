<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Bicycle extends Vehicle implements LightableInterface
{
    public function switchOn(): bool
    {
        if (10 < $this->currentSpeed) {
            return true;
        }
    }

    public function switchOff(): bool
    {
        return false;
    }
}
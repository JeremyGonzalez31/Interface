<?php

require_once 'Vehicle.php';

class Bicycle extends Vehicle implements LightableInterface
{
    public function switchOn(bool $isOn): bool
    {
        if($this->currentSpeed>10){
        return $isOn = true;
    }
}

    public function switchOff(bool $isOff): bool
    {
        return $isOff = false;
    }
}

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);


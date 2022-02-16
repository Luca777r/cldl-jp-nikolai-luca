<?php

class PowerSupply extends Component
{
    protected ?float $power;

    function __construct(float $power)
    {
        $this->power = $power;
    }


    public function getPower(): ?float
    {
        return $this->power;
    }

    public function setPower($power): self
    {
        $this->power = $power;

        return $this;
    }
}

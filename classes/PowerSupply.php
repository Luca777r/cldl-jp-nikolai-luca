<?php

class PowerSupply extends Component
{
    protected ?float $powerSupply;

    public function getPowerSupply(): ?float
    {
        return $this->powerSupply;
    }

    public function setPower($powerSupply): self
    {
        $this->powerSupply = $powerSupply;

        return $this;
    }
}

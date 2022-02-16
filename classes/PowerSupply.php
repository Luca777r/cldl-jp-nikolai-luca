<?php

class Alimentation extends Component
{
    protected ?float $power;

    function __construct(float $power)
    {
        $this->power = $power;
    }


    public function getPower()
    {
        return $this->power;
    }

    public function setPower($power)
    {
        $this->power = $power;

        return $this;
    }
}

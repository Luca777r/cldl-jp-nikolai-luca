<?php

class Ram extends Component
{
    protected ?float $memory;
    protected ?int $nbStrip;
    protected ?string $typeFrequences;

    function __construct(float $memory, int $nbStrip, string $typeFrequences)
    {
        $this->memory = $memory;
        $this->nbStrip = $nbStrip;
        $this->typeFrequences = $typeFrequences;
    }


    public function getMemory()
    {
        return $this->memory;
    }

    public function setMemory($memory)
    {
        $this->memory = $memory;

        return $this;
    }


    public function getNbStrip()
    {
        return $this->nbStrip;
    }

    public function setNbStrip($nbStrip)
    {
        $this->nbStrip = $nbStrip;

        return $this;
    }


    public function getTypeFrequences()
    {
        return $this->typeFrequences;
    }

    public function setTypeFrequences($typeFrequences)
    {
        $this->typeFrequences = $typeFrequences;

        return $this;
    }
}

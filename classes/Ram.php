<?php

class Ram extends Component
{
    protected ?float $memory;
    protected ?int $nbStrip;
    protected ?string $typeFrequences;

    public function getMemory(): float
    {
        return $this->memory;
    }

    public function setMemory($memory): self
    {
        $this->memory = $memory;

        return $this;
    }


    public function getNbStrip(): ?int
    {
        return $this->nbStrip;
    }

    public function setNbStrip($nbStrip): self
    {
        $this->nbStrip = $nbStrip;

        return $this;
    }


    public function getTypeFrequences(): ?string
    {
        return $this->typeFrequences;
    }

    public function setTypeFrequences($typeFrequences): self
    {
        $this->typeFrequences = $typeFrequences;

        return $this;
    }
}

<?php

class Processor extends Component
{
    protected ?float $frequences;
    protected ?int $nbCore;
    protected ?string $chipset;

    public function getFrequences(): ?float
    {
        return $this->frequences;
    }

    public function setFrequences($frequences): self
    {
        $this->frequences = $frequences;

        return $this;
    }

    public function getNbCore(): ?int
    {
        return $this->nbCore;
    }

    public function setNbCore($nbCore): self
    {
        $this->nbCore = $nbCore;

        return $this;
    }

    public function getChipset(): ?string
    {
        return $this->chipset;
    }

    public function setChipset($chipset): self
    {
        $this->chipset = $chipset;

        return $this;
    }
}

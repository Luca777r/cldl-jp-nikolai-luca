<?php

class GraphicCard
{
    protected ?string $chipset;
    protected ?float $memory;

    public function __construct(string $chipset, float $memory)
    {
        $this->chipset = $chipset;
        $this->memory = $memory;
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

    public function getMemory(): ?float
    {
        return $this->memory;
    }

    public function setMemory($memory): self
    {
        $this->memory = $memory;

        return $this;
    }
}
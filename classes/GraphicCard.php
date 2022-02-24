<?php

class GraphicCard extends Component
{
    protected ?string $chipset;
    protected ?float $memory;

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
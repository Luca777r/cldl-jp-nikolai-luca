<?php

class StorageSystem extends Component
{
    protected ?bool $isSsd;
    protected ?int $memory;

    public function getIsSsd(): ?bool
    {
        return $this->isSsd;
    }

    public function setIsSsd($isSsd): self
    {
        $this->isSsd = $isSsd;

        return $this;
    }

    public function getMemory(): ?int
    {
        return $this->memory;
    }

    public function setMemory($memory): self
    {
        $this->memory = $memory;

        return $this;
    }
}

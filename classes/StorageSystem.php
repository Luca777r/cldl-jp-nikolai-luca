<?php

class StorageSystem extends Component
{
    protected ?bool $isSsd;
    protected ?int $memory;

    function __construct(bool $isSsd, int $memory)
    {
        $this->isSsd = $isSsd;
        $this->memory = $memory;
    }


    public function getIsSsd()
    {
        return $this->isSsd;
    }

    public function setIsSsd($isSsd)
    {
        $this->isSsd = $isSsd;

        return $this;
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
}

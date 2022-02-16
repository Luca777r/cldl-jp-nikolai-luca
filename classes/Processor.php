<?php

class Processor extends Component
{
    protected ?float $frequences;
    protected ?int $nbCore;
    protected ?string $chipset;

    function __construct(float $frequences, int $nbCore, string $chipset)
    {
        $this->frequences = $frequences;
        $this->nbCore = $nbCore;
        $this->chipset = $chipset;
    }




    public function getFrequences()
    {
        return $this->frequences;
    }


    public function setFrequences($frequences)
    {
        $this->frequences = $frequences;

        return $this;
    }


    public function getNbCore()
    {
        return $this->nbCore;
    }


    public function setNbCore($nbCore)
    {
        $this->nbCore = $nbCore;

        return $this;
    }




    public function getChipset()
    {
        return $this->chipset;
    }


    public function setChipset($chipset)
    {
        $this->chipset = $chipset;

        return $this;
    }
}

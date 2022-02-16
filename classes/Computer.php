<?php

use Traits\ComponentTrait;

class Computer
{
    use ComponentTrait;
    protected ?bool $isLaptop;
    protected ?string $nom;



    function __construct(bool $isLaptop, string $nom)
    {
        $this->isLaptop = $isLaptop;
        $this->nom = $nom;
    }

    public function getIsLaptop(): ?bool
    {
        return $this->isLaptop;
    }

    public function setIsLaptop($isLaptop): self
    {
        $this->isLaptop = $isLaptop;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom($nom): self
    {
        $this->nom = $nom;

        return $this;
    }
}

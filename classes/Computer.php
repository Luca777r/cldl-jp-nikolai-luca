<?php

use Traits\ComponentTrait;
use Traits\DateTrait;

class Computer
{
    use ComponentTrait;
    use DateTrait;
    protected ?bool $isLaptop;
    protected ?string $name;
    protected ?int $id;




    function __construct(bool $isLaptop, string $name, int $id)
    {
        $this->isLaptop = $isLaptop;
        $this->name = $name;
        $this->id = $id;
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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

}

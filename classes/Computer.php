<?php


class Computer extends Component
{
    protected ?bool $isLaptop;

    public function getIsLaptop(): bool
    {
        return $this->isLaptop;
    }

    public function setIsLaptop($isLaptop): self
    {
        $this->isLaptop = $isLaptop;

        return $this;
    }
}

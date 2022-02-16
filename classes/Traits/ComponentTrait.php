<?php

namespace Traits;

trait ComponentTrait
{
    private ?int $quantity;
    private ?int $numberCreated;
    
    public function __construct(int $quantity, int $numberCreated)
    {
        $this->quantity = $quantity;
        $this->numberCreated = $numberCreated;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }


    public function setQuantity($quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getnumberCreated(): int
    {
        return $this->numberCreated;
    }


    public function setnumberCreated($numberCreated): self
    {
        $this->numberCreated = $numberCreated;

        return $this;
    }
}
